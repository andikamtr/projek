<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal_kriterias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->decimal('pendidikan');
            $table->decimal('absensi');
            $table->decimal('kedisiplinan');
            $table->decimal('prestasi');
            $table->decimal('jumlah');
            $table->decimal('prioritas');
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
        Schema::dropIfExists('normal_kriterias');
    }
}