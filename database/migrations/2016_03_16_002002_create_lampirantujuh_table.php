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
            $table->float('dividentunaiPercent', 9, 2);

            $table->float('honorarium', 9, 2);
            $table->float('honorariumPercent', 9, 2);
            $table->float('bonus', 9, 2);
            $table->float('bonusPercent', 9, 2);
            $table->float('hadiah', 9, 2);
            $table->float('hadiahPercent', 9, 2);
            $table->float('ahli', 9, 2);
            $table->float('ahliPercent', 9, 2);
            $table->float('am', 9, 2);
            $table->float('amPercent', 9, 2);
            $table->float('pendidikan', 9, 2);
            $table->float('pendidikanPercent', 9, 2);
            $table->float('pemajuan', 9, 2);
            $table->float('pemajuanPercent', 9, 2);
            $table->float('menebussaham', 9, 2);
            $table->float('menebussahamPercent', 9, 2);
            $table->float('persaraan', 9, 2);
            $table->float('persaraanPercent', 9, 2);
            $table->float('jumlah', 9, 2);
            $table->float('bakiDepan', 9, 2);
            $table->float('dividentunai_', 9, 2);
            $table->float('dividentunaiPercent_', 9, 2);
            $table->float('honorarium_', 9, 2);
            $table->float('honorariumPercent_', 9, 2);
            $table->float('bonus_', 9, 2);
            $table->float('bonus_Percent_', 9, 2);
            $table->float('hadiah_', 9, 2);
            $table->float('hadiahPercent_', 9, 2);
            $table->float('ahli_', 9, 2);
            $table->float('ahliPercent_', 9, 2);
            $table->float('am_', 9, 2);
            $table->float('amPercent_', 9, 2);
            $table->float('pendidikan_', 9, 2);
            $table->float('pendidikanPercent_', 9, 2);
            $table->float('pemajuan_', 9, 2);
            $table->float('pemajuanPercent_', 9, 2);
            $table->float('menebussaham_', 9, 2);
            $table->float('menebussahamPercent_', 9, 2);
            $table->float('pesaraan_', 9, 2);
            $table->float('pesaraanPercent_', 9, 2);
            $table->float('jumlah_', 9, 2);
            $table->float('bakiDepan_', 9, 2);
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
