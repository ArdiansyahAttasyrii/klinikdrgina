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
        Schema::create('tbl_janji_temu', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('antrian_id');
            $table->date('tanggal');
            $table->time('status',['Pending','Diterima'])->default('Pending');
            $table->foreign('antrian_id')->references('id')->on('tbl_antrian')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_janji_temu');
    }
};
