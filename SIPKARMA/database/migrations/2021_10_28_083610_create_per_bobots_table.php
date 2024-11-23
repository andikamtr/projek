<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerBobotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('per_bobots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->decimal('bagus_sekali');
            $table->decimal('bagus');
            $table->decimal('cukup');
            $table->decimal('kurang');
            $table->decimal('jumlah');
            $table->decimal('hasil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('per_bobots');
    }
}
