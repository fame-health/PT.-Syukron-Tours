<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\KamarHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class BookingController
{
    public function create($kamar_id)
    {
        $kamar = KamarHotel::with('hotel')->findOrFail($kamar_id);
        return view('bookings.create', compact('kamar'));
    }

    public function store(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'kamar_id' => 'required|exists:kamar_hotels,id',
            'check_in_date' => 'required|date|after_or_equal:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'guest_name' => 'required|string|max:255',
            'guest_email' => 'required|email|max:255',
            'guest_phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
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

        $kamar = KamarHotel::with('hotel')->findOrFail($request->kamar_id);

        $checkIn = Carbon::parse($request->check_in_date);
        $checkOut = Carbon::parse($request->check_out_date);
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

        // Check room availability, excluding completed or cancelled bookings
        $inactiveStatuses = ['completed', 'cancelled']; // Tambahkan status lain yang relevan di sini
        $existingBookings = Booking::where('kamar_hotel_id', $kamar->id)
            ->whereNotIn('status', $inactiveStatuses) // Hanya hitung booking aktif
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query->whereBetween('check_in_date', [$checkIn, $checkOut])
                    ->orWhereBetween('check_out_date', [$checkIn, $checkOut])
                    ->orWhere(function ($q) use ($checkIn, $checkOut) {
                        $q->where('check_in_date', '<=', $checkIn)
                          ->where('check_out_date', '>=', $checkOut);
                    });
            })
            ->where('check_out_date', '>=', now())
            ->count();

        if ($existingBookings > 0) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kamar tidak tersedia untuk tanggal yang dipilih'
                ], 422);
            }
            return redirect()->back()
                ->with('error', 'Kamar tidak tersedia untuk tanggal yang dipilih')
                ->withInput();
        }

        try {
            $totalPrice = $kamar->harga * $days;

            $booking = Booking::create([
                'kamar_hotel_id' => $kamar->id,
                'user_id' => Auth::check() ? Auth::id() : null,
                'check_in_date' => $checkIn,
                'check_out_date' => $checkOut,
                'total_price' => $totalPrice,
                'status' => 'pending',
                'guest_name' => $request->guest_name,
                'guest_email' => $request->guest_email,
                'guest_phone' => $request->guest_phone,
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pemesanan berhasil dibuat',
                    'booking_id' => $booking->id
                ], 200);
            }

            return redirect()->route('hotel.show', $kamar->hotel->slug)
                ->with('success', 'Pemesanan berhasil dibuat');
        } catch (\Exception $e) {
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

    public function show(Booking $booking)
    {
        // Authorization check
        if (Auth::check() && $booking->user_id !== null && Auth::id() !== $booking->user_id) {
            abort(403, 'Unauthorized');
        }
        if (!Auth::check() && request('email') !== $booking->guest_email) {
            abort(403, 'Unauthorized');
        }

        return view('bookings.show', compact('booking'));
    }

    public function index()
    {
        $email = request('email');
        if (!$email) {
            return redirect()->back()->with('error', 'Email diperlukan untuk melihat pemesanan.');
        }

        $bookings = Booking::where('guest_email', $email)
            ->with('kamarHotel')
            ->latest()
            ->paginate(10);

        return view('bookings.index', compact('bookings'));
    }
}
