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
        Schema::create('fish', function (Blueprint $table) {
            $table->id();
            $table->integer('water_temperature');
            $table->integer('depth');
            $table->integer('waters');
            $table->integer('pool_area');
            $table->integer('challenger_height');
            $table->integer('bottom_pool');
            $table->integer('fish_class');
            $table->string('fish_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fish');
    }
};
