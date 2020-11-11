<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['start','end', 'country'];
    public $timestamps=false;

    public function customers()
	{
		return $this->hasMany('\App\Customer', 'destination_id', 'id');
	}
}