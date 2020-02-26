<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['name', 'description','logo','chanel_id','chanel_Name' ,'startdate', 'enddate'];

}
