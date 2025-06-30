<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'kamar_hotel_id',
        'user_id',
        'check_in_date',
        'check_out_date',
        'room_quantity',
        'total_price',
        'status',
        'guest_name',
        'guest_email',
        'guest_phone',
    ];

    protected $casts = [
        'check_in_date' => 'date',    // Konversi ke Carbon
        'check_out_date' => 'date',   // Konversi ke Carbon
        'total_price' => 'decimal:2', // Opsional untuk harga
    ];

    /**
     * Get the kamar hotel that owns this booking.
     */
    public function kamarHotel(): BelongsTo
    {
        return $this->belongsTo(KamarHotel::class);
    }

    /**
     * Get the user that owns this booking.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
