<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiranlima extends Model
{
	protected $table = 'lampiranlima';
	protected $id = 'id';
	protected $fillable = [
		'tahun', 'untungrugi', 'untungbersih',
		'keputusan', 'jumlahKeputusan', 'markah1',
		'_7a', '_7b', '_7c', '_7d', '_7e1', '_7e2', 'jumlah7e',
		'markah2','markah3','markah4','markah5', 'markah6',
		'ppk_id'
	];

	public function ppk() {
		return $this->belongsTo('App\Ppk');
	}
}
