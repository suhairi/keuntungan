<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampirantujuh extends Model
{
    protected $table = 'lampirantujuh';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'tahun', 
    	'untungBersih', 'luarbiasa', 'rezabberkanun', 'yayasanpelajaran', 'cukaipendapatan', 'pelarasan',
    	'dividentunai', 'honorarium', 'bonus', 'hadiah', 'ahli', 'am', 'pendidikan', 'pemajuan', 'menebussaham', 'persaraan', 'jumlah',
    	'dividentunai_', 'honorarium_', 'bonus_', 'hadiah_', 'ahli_', 'am_', 'pendidikan_', 'pemajuan_', 'menebussaham_', 'persaraan_', 'jumlah_',
    	'ppk_id'
    ];

    public function ppk() {
    	return $this->belongsTo('App\Ppk');
    }
}
