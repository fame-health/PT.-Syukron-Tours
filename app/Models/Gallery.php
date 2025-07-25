<?php

// app/Models/Gallery.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['image', 'title', 'location', 'description'];
}
