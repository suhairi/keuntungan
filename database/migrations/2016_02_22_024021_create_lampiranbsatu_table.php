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
            $table->tinyInteger('bank_semasa1', false, false);
            $table->tinyInteger('bank_semasa2', false, false);
            $table->tinyInteger('bank_semasa3', false, false);
            $table->tinyInteger('bank_semasa4', false, false);
            $table->tinyInteger('bank_semasa5', false, false);
            $table->float('semasa1', 9, 2);
            $table->float('semasa2', 9, 2);
            $table->float('semasa3', 9, 2);
            $table->float('semasa4', 9, 2);
            $table->float('semasa5', 9, 2);
            $table->tinyInteger('bank_biasa1', false, false);
            $table->tinyInteger('bank_biasa2', false, false);
            $table->tinyInteger('bank_biasa3', false, false);
            $table->float('biasa1', 9, 2);
            $table->float('biasa2', 9, 2);
            $table->float('biasa3', 9, 2);
            $table->tinyInteger('bank_tetap1', false, false);
            $table->tinyInteger('bank_tetap2', false, false);
            $table->tinyInteger('bank_tetap3', false, false);
            $table->tinyInteger('bank_tetap4', false, false);
            $table->tinyInteger('bank_tetap5', false, false);
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
        Schema::drop('lampiranbsatu');
    }
}
