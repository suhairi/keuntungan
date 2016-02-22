<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapiranbsatu extends Model
{
	protected $table = 'lampiranbsatu';
	protected $primaryKey = 'id';
	protected $fillable = [
		'tahun',
        'ditangan',
        'semasa1',
        'semasa2',
        'semasa3',
        'semasa4',
        'semasa5',
        'biasa1',
        'biasa2',
        'biasa3',
        'tetap1',
        'tetap2',
        'tetap3',
        'tetap4',
        'tetap5',
        'jumlahPembahagian',
        'simpananAhli',
        'terimaanTerdahulu',
        'jumlahAtas',
        'jumlahBawah',
        'nisbah',
        'markah',
	];    
}
