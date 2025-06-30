<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KamarHotel extends Model
{
    protected $fillable = [
        'id_hotel',
        'images',
        'nama_kamar',
        'deskripsi',
        'bintang',
        'harga',
        'vendor_kategori',
        'jumlah_kamar',
    ];

    protected $casts = [
        'images' => 'array', // Automatically cast JSON to array
    ];

    /**
     * Get the hotel that owns this room.
     */
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }
}
