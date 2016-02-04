<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 2);
            $table->string('name', 255);
            $table->string('fullname');
            $table->text('address');
            $table->string('notel1');
            $table->string('notel2');
            $table->string('fax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ppk');
    }
}
