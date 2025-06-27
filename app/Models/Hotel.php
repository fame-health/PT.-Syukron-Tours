<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Hotel extends Model
{
    protected $fillable = [
        'nama_hotel',
        'slug',
        'deskripsi',
        'logo',
        'alamat',
        'bintang',
    ];

    /**
     * Get the rooms associated with this hotel.
     */
    public function kamarHotels(): HasMany
    {
        return $this->hasMany(KamarHotel::class, 'id_hotel');
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Event deleting untuk menghapus file logo dari storage
        static::deleting(function ($hotel) {
            if ($hotel->logo) {
                Storage::disk('public')->delete($hotel->logo);
            }
        });
    }
}
