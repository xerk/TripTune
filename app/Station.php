<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Station extends Model 
{

    protected $table = 'stations';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function toFlights()
    {
        return $this->hasMany('App\Flight', 'to_station_id');
    }

    public function fromFlights()
    {
        return $this->hasMany('App\Flight', 'from_station_id');
    }

}