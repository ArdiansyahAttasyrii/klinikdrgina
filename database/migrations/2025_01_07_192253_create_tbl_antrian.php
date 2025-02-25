<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_antrian', function (Blueprint $table) {
            $table->id();
            $table->string('kode_antrian',100)->unique();
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->foreign('jadwal_id')->references('id')->on('tbl_jadwal')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pasien_id')->references('id')->on('tbl_users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_antrian');
    }
};
