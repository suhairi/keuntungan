<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerima', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('ppk_id', false, false);
            $table->tinyInteger('markah_id', false, false);
            $table->tinyInteger('service_duration', false, false);
            $table->enum('status', ['PILIHAN', 'PELANTIKAN']);
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
        Schema::drop('penerima');
    }
}
