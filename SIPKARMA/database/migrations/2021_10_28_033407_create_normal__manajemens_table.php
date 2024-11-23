<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalManajemensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal__manajemens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->decimal('kepemimpinan');
            $table->decimal('perencanaan');
            $table->decimal('pengorganisasian');
            $table->decimal('pengarahan');
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
        Schema::dropIfExists('normal__manajemens');
    }
}
