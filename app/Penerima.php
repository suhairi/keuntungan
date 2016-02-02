<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'penerima';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'ppk_id', 'markah_id', 'service_duration', 'status'];


    public function ppk() {
        return $this->belongsTo('App\Ppk');
    }

    public function markah() {
        return $this->belongsTo('App\Markah');
    }

}
