<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['name', 'description','logo','chanel_id' ,'startdate', 'enddate'];

    public function chanel()
    {
    	return $this->belongsTo('App\Chanel');
    }
}
