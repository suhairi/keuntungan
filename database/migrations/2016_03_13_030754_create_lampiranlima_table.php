<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLampiranlimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiranlima', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun', false, false);
            $table->float('untungrugi', 9,2);
            $table->float('untungBersih', 9, 2);
            $table->string('keputusan', 3);
            $table->float('jumlahKeputusan',9 ,2);            
            $table->tinyInteger('markah1', false, false);
            $table->float('_7a', 9, 2);
            $table->float('_7b', 9, 2);
            $table->tinyInteger('_7c', false, false);
            $table->float('_7d', 9, 2);
            $table->float('_7e1', 9, 2);
            $table->float('_7e2', 9, 2);
            $table->float('jumlah7e', 9, 2);
            $table->tinyInteger('markah2', false, false);
            $table->tinyInteger('markah3', false, false);
            $table->tinyInteger('markah4', false, false);
            $table->tinyInteger('markah5', false, false);
            $table->tinyInteger('markah6', false, false);
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
        Schema::drop('lampiranlima');
    }
}
