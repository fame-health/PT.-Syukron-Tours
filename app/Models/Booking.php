<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'kamar_hotel_id',
        'user_id',
        'check_in_date',
        'check_out_date',
        'total_price',
        'status',
        'guest_name',
        'guest_email',
        'guest_phone',
    ];

    public function kamarHotel()
    {
        return $this->belongsTo(KamarHotel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
