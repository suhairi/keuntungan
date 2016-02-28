<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiranbsatu extends Model
{
	protected $table = 'lampiranbsatu';
	protected $primaryKey = 'id';
	protected $fillable = [
	'tahun',
        'ditangan',
        'bank_semasa1',
        'bank_semasa2',
        'bank_semasa3',
        'bank_semasa4',
        'bank_semasa5',
        'semasa1',
        'semasa2',
        'semasa3',
        'semasa4',
        'semasa5',
        'bank_biasa1',
        'bank_biasa2',
        'bank_biasa3',
        'biasa1',
        'biasa2',
        'biasa3',
        'bank_tetap1',
        'bank_tetap2',
        'bank_tetap3',
        'bank_tetap4',
        'bank_tetap5',
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
        'ppk_id'
	]; 


        public function ppk() {
                return belongsTo('App\Ppk');
        }  
}
