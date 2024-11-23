<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKomitmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub__komitmens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->decimal('loyal');
            $table->decimal('jujur');
            $table->decimal('tanggung_jawab');
            $table->decimal('disiplin');
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
        Schema::dropIfExists('sub__komitmens');
    }
}
