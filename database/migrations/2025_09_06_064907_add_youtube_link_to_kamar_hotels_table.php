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
    Schema::table('kamar_hotels', function (Blueprint $table) {
        $table->string('youtube_link')->nullable()->after('jumlah_kamar');
    });
}

public function down()
{
    Schema::table('kamar_hotels', function (Blueprint $table) {
        $table->dropColumn('youtube_link');
    });
}

};
