<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disclaimer extends Model
{
    protected $table = 'disclaimer';
    protected $primaryKey = 'id';
    protected $fillable = ['tahun', 'ppk_id'];


    public function ppk() {
    	return $this->belongsTo('App\Ppk');
    }
}
