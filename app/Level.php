<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'position'];
    public $timestamps = false;


}
