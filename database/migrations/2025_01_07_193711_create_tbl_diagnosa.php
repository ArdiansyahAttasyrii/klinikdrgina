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
            $table->string('keluhan',100);
            $table->unsignedBigInteger('pasien_id');
            $table->enum('tindakan',['Obat', 'Treatment', 'Obat & Treatment']);
            $table->foreign('pasien_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');   
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
