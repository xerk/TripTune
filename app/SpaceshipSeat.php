<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpaceshipSeat extends Model 
{

    protected $table = 'spaceship_seats';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function spaceshipSeatPrices()
    {
        return $this->hasMany('App\SpaceshipSeatPrice', 'spaceship_seat_id');
    }

    public function travelCategory()
    {
        return $this->belongsTo('App\TravelCategory', 'travel_category_id');
    }

    public function spaceship()
    {
        return $this->belongsTo('App\Spaceship', 'spaceship_id');
    }

}