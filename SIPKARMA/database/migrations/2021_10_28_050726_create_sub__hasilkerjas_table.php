<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubHasilkerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub__hasilkerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->decimal('kualitas');
            $table->decimal('kuantitas');
            $table->decimal('jumlah');
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
        Schema::dropIfExists('sub__hasilkerjas');
    }
}
