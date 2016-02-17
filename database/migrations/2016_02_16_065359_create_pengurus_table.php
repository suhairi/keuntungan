<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nokp');
            $table->string('nama_jawatan');
            $table->string('kod_jawatan');
            $table->string('notel');
            $table->integer('ppk_id', false, false);
            $table->timestamps();
            $table->date('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengurus');
    }
}
