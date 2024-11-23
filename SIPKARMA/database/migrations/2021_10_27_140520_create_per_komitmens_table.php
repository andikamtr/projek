<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerKomitmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('per_komitmens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->decimal('loyal');
            $table->decimal('jujur');
            $table->decimal('tanggung_jawab');
            $table->decimal('disiplin');
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
        Schema::dropIfExists('per_komitmens');
    }
}
