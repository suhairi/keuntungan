<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLampiranbsatuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiranbsatu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun', false, false);
            $table->float('ditangan', 9, 2);
            $table->float('semasa1', 9, 2);
            $table->float('semasa2', 9, 2);
            $table->float('semasa3', 9, 2);
            $table->float('semasa4', 9, 2);
            $table->float('semasa5', 9, 2);
            $table->float('biasa1', 9, 2);
            $table->float('biasa2', 9, 2);
            $table->float('biasa3', 9, 2);
            $table->float('tetap1', 9, 2);
            $table->float('tetap2', 9, 2);
            $table->float('tetap3', 9, 2);
            $table->float('tetap4', 9, 2);
            $table->float('tetap5', 9, 2);
            $table->float('jumlahPembahagian', 9, 2);
            $table->float('simpananAhli', 9, 2);
            $table->float('terimaanTerdahulu', 9, 2);
            $table->float('jumlahAtas', 9, 2);
            $table->float('jumlahBawah', 9, 2);
            $table->float('nisbah', 9, 2);
            $table->float('markah', 9, 2);

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
        Schema::drop('lampiranbsatu');
    }
}
