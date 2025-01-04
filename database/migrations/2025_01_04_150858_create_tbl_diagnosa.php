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
        Schema::create('tbl_diagnosa', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('keluhan');
            $table->string('hasil_diagnosa');
            $table->string('tindakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_diagnosa');
    }
};
