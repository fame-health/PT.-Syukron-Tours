<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class BookingInvoiceController 
{
    public function generate($id)
    {
        $booking = Booking::with(['kamarHotel.hotel', 'user'])->findOrFail($id);

        $pdf = Pdf::loadView('invoices.booking', compact('booking'));

        return $pdf->download('invoice_booking_' . $booking->id . '.pdf');
    }
}
