<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hotel');
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->string('logo')->nullable(); // Stores path/URL to logo image
            $table->text('alamat');
            $table->integer('bintang')->unsigned()->between(1, 5); // Star rating (1-5)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
