<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppk extends Model
{
    protected $table = 'ppk';
    protected $primaryKey = 'id';
    protected $fillable = ['code', 'name'];

    public $timestamps = false;
}
