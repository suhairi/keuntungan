<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLapiranbduaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiranbdua', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun', false, false);
            $table->float('item1', 9, 2);
            $table->float('item2', 9, 2);
            $table->float('item3', 9, 2);
            $table->float('item4', 9, 2);
            $table->float('item5', 9, 2);
            $table->float('item6', 9, 2);

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
        Schema::drop('lampiranbdua');
    }
}
