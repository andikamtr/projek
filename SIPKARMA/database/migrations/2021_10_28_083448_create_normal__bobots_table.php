<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalBobotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal__bobots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->decimal('bagus_sekali');
            $table->decimal('bagus');
            $table->decimal('cukup');
            $table->decimal('kurang');
            $table->decimal('jumlah');
            $table->decimal('prioritas');
            $table->decimal('sub_prioritas');
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
        Schema::dropIfExists('normal__bobots');
    }
}
