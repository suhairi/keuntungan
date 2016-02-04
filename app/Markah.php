<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markah extends Model
{
    protected $table = 'markah';
    protected $primaryKey = 'id';
    protected $fillable = ['position', 'mark', 'ppk_id'];

    public $timestamps = false;


    public function ppk() {
        return $this->belongsTo('App/Ppk');
    }
}
