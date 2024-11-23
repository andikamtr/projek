<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalKerjasamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal__kerjasamas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->decimal('komunikasi');
            $table->decimal('beradaptasi');
            $table->decimal('berbagi_informasi');
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
        Schema::dropIfExists('normal__kerjasamas');
    }
}
