<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('kamar_hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hotel')->constrained('hotels')->onDelete('cascade');
            $table->json('images')->nullable(); // Stores array of image paths/URLs
            $table->string('nama_kamar');
            $table->text('deskripsi');
            $table->integer('bintang')->unsigned()->between(1, 5); // Star rating (1-5)
            $table->decimal('harga', 10, 2); // Price with 2 decimal places
            $table->string('vendor_kategori'); // e.g., Standard, Premium
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kamar_hotels');
    }
}
