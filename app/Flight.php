<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model 
{

    protected $table = 'flights';
    public $timestamps = true;

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function fromStation()
    {
        return $this->belongsTo('App\Station', 'from_station_id');
    }

    public function toStation()
    {
        return $this->belongsTo('App\Station', 'to_station_id');
    }

    public function flightCases()
    {
        return $this->hasMany('App\FlightCase', 'flight_id');
    }

    public function spaceshipSeatPrices()
    {
        return $this->hasMany('App\SpaceshipSeatPrice', 'flight_id');
    }

}