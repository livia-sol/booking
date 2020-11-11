<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['destination_id','first_name', 'last_name'];
    public $timestamps=false;

    public function destination()
	{
		return $this->belongsTo('\App\Destination', 'destination_id');
	}
}

