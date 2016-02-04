<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';
    protected $primaryKey = 'id';
    protected $fillable = ['short_name', 'name'];

    public $timestamps = false;
}
