<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiranbtiga extends Model
{
	protected $table = 'lampiranbtiga';
	protected $primaryKey = 'id';
	protected $fillable = [
		'nisbah1', 'markah1',
		'harta_semasa', 'tanggungan_semasa', 'nisbah2', 'markah2', 
		'jumlah_tanggungan', 'jumlah_harta', 'nisbah3', 'markah3',
		'ppk_id'
		];

	public function ppk() {
		return $this->belongsTo('App\Ppk');
	}


}
