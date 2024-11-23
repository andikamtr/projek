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
        Schema::create('cpenerimas', function (Blueprint $table) {
            $table->string('nik');
            $table->string('nama');
            $table->integer('lantai');
            $table->integer('dinding');
            $table->integer('atap');
            $table->integer('tanggungan');
            $table->integer('penghasilan');
            $table->integer('kepemilikan_rumah');
            $table->integer('mck');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpenerimas');
    }
};
