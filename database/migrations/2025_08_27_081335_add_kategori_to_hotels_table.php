<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('hotels', function (Blueprint $table) {
        $table->enum('kategori', ['mekah', 'madinah'])->after('bintang');
    });
}

public function down()
{
    Schema::table('hotels', function (Blueprint $table) {
        $table->dropColumn('kategori');
    });
}

};
