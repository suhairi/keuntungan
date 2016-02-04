<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'Account';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'bank_id', 'ppk_id', 'type', 'amount', 'date'];


    public function ppk() {
        return $this->belongsTo('App/Ppk');
    }

    public function bank() {
        return $this->belongsTo('App/Bank');
    }

}
