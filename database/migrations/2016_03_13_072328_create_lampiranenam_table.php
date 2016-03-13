<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLampiranenamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiranenam', function (Blueprint $table) {

            $table->increments('id');
            $table->tinyInteger('tahun', false, false);
            $table->float('ahliawal', 9, 2);
            $table->float('ahlisemasa', 9, 2);
            $table->float('ahlipenggunaansemasa', 9, 2);
            $table->float('ahlibakiakhir', 9, 2);
            $table->float('ahliperatuspenggunaan', 3, 2);

            $table->float('amawal', 9, 2);
            $table->float('amsemasa', 9, 2);
            $table->float('ampenggunaansemasa', 9 ,2);
            $table->float('ambakiakhir', 9, 2);
            $table->float('amperatuspenggunaan', 3, 2);

            $table->float('pendidikanawal', 9, 2);
            $table->float('pendidikansemasa', 9, 2);
            $table->float('pendidikanpenggunaansemasa', 9 ,2);
            $table->float('pendidikanbakiakhir', 9, 2);
            $table->float('pendidikanperatuspenggunaan', 3, 2);

            $table->float('pemajuanawal', 9, 2);
            $table->float('pemajuansemasa', 9, 2);
            $table->float('pemajuanpenggunaansemasa', 9 ,2);
            $table->float('pemajuanbakiakhir', 9, 2);
            $table->float('pemajuanperatuspenggunaan', 3, 2);

            $table->tinyInteger('ppk_id', false, false);
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
        Schema::drop('lampiranenam');
    }
}
