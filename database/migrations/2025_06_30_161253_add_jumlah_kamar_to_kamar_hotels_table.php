<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJumlahKamarToKamarHotelsTable extends Migration
{
    public function up()
    {
        Schema::table('kamar_hotels', function (Blueprint $table) {
            $table->integer('jumlah_kamar')->default(1)->after('vendor_kategori');
        });
    }

    public function down()
    {
        Schema::table('kamar_hotels', function (Blueprint $table) {
            $table->dropColumn('jumlah_kamar');
        });
    }
}
