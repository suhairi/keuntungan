<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markah extends Model
{
    protected $table = 'markah';
    protected $primaryKey = 'id';
    protected $fillable = ['position', 'mark'];

    public $timestamps = false;
}
