<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiranbdua extends Model
{
    protected $table = 'Lampiranbdua';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'item1', 'item2', 'item3', 'item4', 'item5', 'item1',
    	'jumlahAtas', 'jumlahBawah', 'nisbah', 'markah', 'ppk_id'
    ];

    public function ppk() {
    	return $this->belongsTo('App\Ppk');
    }
}
