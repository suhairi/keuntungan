<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';
    protected $primaryKey = 'id';
    protected $fillable = ['short_name', 'name', 'ppk_id'];

    public $timestamps = false;

    public function ppk() {
    	return $this->belongsTo('App\Ppk');
    }
}
