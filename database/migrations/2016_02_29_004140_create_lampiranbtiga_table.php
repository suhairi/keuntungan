<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLampiranbtigaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiranbtiga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun', false, false);
            $table->float('nisbah1', 4, 2)->nullable();
            $table->tinyInteger('markah1', false, false)->nullable();
            $table->float('harta_semasa', 9, 2)->nullable();
            $table->float('tanggungan_semasa', 9, 2)->nullable();
            $table->float('nisbah2', 4, 2)->nullable();
            $table->tinyInteger('markah2', false, false)->nullable();
            $table->float('jumlah_tanggungan', 9, 2);
            $table->float('jumlah_harta', 9, 2);
            $table->float('nisbah3', 9, 2)->nullable();
            $table->tinyInteger('markah3', false, false);
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
        Schema::drop('lampiranbtiga');
    }
}
