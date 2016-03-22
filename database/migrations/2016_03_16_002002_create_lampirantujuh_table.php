<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLampirantujuhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampirantujuh', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun', false, false);
            $table->float('untungBersih', 9, 2);
            $table->float('luarbiasa', 9, 2)->nullable();
            $table->float('rezabberkanun', 9, 2);
            $table->float('yayasanpelajaran', 9, 2)->nullable();
            $table->float('cukaipendapatan', 9, 2);
            $table->float('pelarasan', 9, 2)->nullable();
            $table->float('dividentunai', 9, 2);
            $table->float('honorarium', 9, 2);
            $table->float('bonus', 9, 2);
            $table->float('hadiah', 9, 2);
            $table->float('ahli', 9, 2);
            $table->float('am', 9, 2);
            $table->float('pendidikan', 9, 2);
            $table->float('pemajuan', 9, 2);
            $table->float('menebussaham', 9, 2);
            $table->float('persaraan', 9, 2);
            $table->float('jumlah', 9, 2);
            $table->float('dividentunai_', 9, 2);
            $table->float('honorarium_', 9, 2);
            $table->float('bonus_', 9, 2);
            $table->float('hadiah_', 9, 2);
            $table->float('ahli_', 9, 2);
            $table->float('am_', 9, 2);
            $table->float('pendidikan_', 9, 2);
            $table->float('pemajuan_', 9, 2);
            $table->float('menebussaham_', 9, 2);
            $table->float('persaraan_', 9, 2);
            $table->float('jumlah_', 9, 2);
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
        Schema::drop('lampirantujuh');
    }
}
