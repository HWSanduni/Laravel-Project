<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{

  protected $fillable = ['name', 'description','logo' ,'startdate', 'enddate'];


  public function episode()
    {
    	return $this->hasMany('App\Episode');
    }
}
