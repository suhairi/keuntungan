<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
 	protected $table = 'pengurus';
 	protected $primaryKey = 'id';
 	protected $fillable = ['name', 'nokp', 'nama_jawatan', 'kod_jawatan', 'notel', 'ppk_id'];


 	public function ppk() {
 		return $this->belongsTo('App\Ppk');
 	}

}
