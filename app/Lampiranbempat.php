<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiranbempat extends Model
{
    protected $table = 'Lampiranbempat';
    protected $primaryKey = 'id';
    protected $fillable = ['tahun', 'untungrugi', 'ppk_id'];

    public function ppk() {
    	return $this->belongsTo('App\Ppk');
    }
}
