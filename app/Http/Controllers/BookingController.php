<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\KamarHotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class BookingController
{
    /**
     * Show the form for creating a new booking for a specific hotel.
     *
     * @param int $hotel_id
     * @return \Illuminate\View\View
     */
    public function create($hotel_id)
    {
        $hotel = Hotel::with('kamarHotels')->findOrFail($hotel_id);
        $kamarHotels = $hotel->kamarHotels; // Pass available rooms for selection
        return view('bookings.create', compact('hotel', 'kamarHotels'));
    }

    /**
     * Store a newly created booking in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        Log::info('Received booking data: ', $request->all());

        // Validation rules aligned with Booking model
        $validator = Validator::make($request->all(), [
            'kamar_hotel_id' => 'required|exists:kamar_hotels,id',
            'check_in_date' => 'required|date|after_or_equal:' . Carbon::today()->toDateString(),
            'check_out_date' => 'required|date|after:check_in_date',
            'room_quantity' => 'required|integer|min:1',
            'guest_name' => 'required|string|max:255',
            'guest_email' => 'required|email|max:255',
            'guest_phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            Log::info('Validation failed: ', $validator->errors()->toArray());
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Retrieve kamarHotel and check availability
        $kamarHotel = KamarHotel::findOrFail($request->kamar_hotel_id);
        $checkIn = Carbon::parse($request->check_in_date)->setTimezone('Asia/Jakarta');
        $checkOut = Carbon::parse($request->check_out_date)->setTimezone('Asia/Jakarta');
        $roomQuantity = (int) $request->room_quantity;

        // Calculate total price based on KamarHotel's harga field
        $days = $checkIn->diffInDays($checkOut);
        if ($days <= 0) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Check-out date must be after check-in date'
                ], 422);
            }
            return redirect()->back()
                ->with('error', 'Tanggal check-out harus setelah tanggal check-in.')
                ->withInput();
        }

        $totalPrice = $kamarHotel->harga * $days * $roomQuantity;

        // Check room availability
        $inactiveStatuses = ['checked_out', 'cancelled'];
        $bookedRooms = Booking::where('kamar_hotel_id', $kamarHotel->id)
            ->whereNotIn('status', $inactiveStatuses)
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query->whereBetween('check_in_date', [$checkIn, $checkOut])
                    ->orWhereBetween('check_out_date', [$checkIn, $checkOut])
                    ->orWhere(function ($q) use ($checkIn, $checkOut) {
                        $q->where('check_in_date', '<=', $checkIn)
                          ->where('check_out_date', '>=', $checkOut);
                    });
            })
            ->where('check_out_date', '>=', now())
            ->sum('room_quantity');

        $availableRooms = $kamarHotel->jumlah_kamar - $bookedRooms;

        if ($availableRooms < $roomQuantity) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Tidak cukup kamar tersedia untuk tanggal dan jumlah yang dipilih'
                ], 422);
            }
            return redirect()->back()
                ->with('error', 'Tidak cukup kamar tersedia untuk tanggal dan jumlah yang dipilih')
                ->withInput();
        }

        try {
            DB::beginTransaction();

            $booking = Booking::create([
                'kamar_hotel_id' => $kamarHotel->id,
                'user_id' => Auth::check() ? Auth::id() : null,
                'check_in_date' => $checkIn,
                'check_out_date' => $checkOut,
                'room_quantity' => $roomQuantity,
                'total_price' => $totalPrice,
                'status' => 'pending',
                'guest_name' => $request->guest_name,
                'guest_email' => $request->guest_email,
                'guest_phone' => $request->guest_phone,
            ]);

            DB::commit();

            Log::info('Booking created with ID: ' . $booking->id);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pemesanan berhasil dibuat',
                    'booking_id' => $booking->id,
                    'total_price' => $totalPrice,
                ], 200);
            }

            return redirect()->route('hotel.show', $kamarHotel->hotel->slug)
                ->with('success', 'Pemesanan berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Booking creation failed: ' . $e->getMessage());
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat memproses pemesanan.'
                ], 500);
            }
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat memproses pemesanan.')
                ->withInput();
        }
    }

    /**
     * Display the specified booking.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\View\View
     */
    public function show(Booking $booking)
    {
        if (Auth::check() && $booking->user_id !== null && Auth::id() !== $booking->user_id) {
            abort(403, 'Unauthorized');
        }
        if (!Auth::check() && request('email') !== $booking->guest_email) {
            abort(403, 'Unauthorized');
        }

        return view('bookings.show', compact('booking'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        $email = request('email');

        if (!$email) {
            return view('bookings.index', ['error' => 'Email diperlukan untuk melihat pemesanan.']);
        }

        $bookings = Booking::where('guest_email', $email)
            ->with(['kamarHotel.hotel', 'user'])
            ->latest()
            ->paginate(10);

        return view('bookings.index', compact('bookings'));
    }
}
