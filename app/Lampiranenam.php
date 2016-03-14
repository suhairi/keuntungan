<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiranenam extends Model
{
    protected $table = 'lampiranenam';
    protected $id = 'id';
    protected $fillable = [
    	'tahun', 
        'ahliawal', 'ahlisemasa', 'ahlipenggunaansemasa', 'ahlibakiakhir', 'ahliperatuspenggunaan',
    	'amamawal', 'amsemasa', 'ampenggunaansemasa', 'ambakiakhir', 'amperatuspenggunaan',
    	'pendidikanawal', 'pendidikansemasa', 'pendidikanpenggunaansemasa', 'pendidikanbakiakhir', 'pendidikanperatuspenggunaan',
    	'pemajuanawal', 'pemajuansemasa', 'pemajuanpenggunaansemasa', 'pemajuanbakiakhir', 'pemajuanperatuspenggunaan',
    	'ppk_id'
    ];

    public function ppk() {
		return $this->belongsTo('App\Ppk');
	}
}
