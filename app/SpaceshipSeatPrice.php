<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpaceshipSeatPrice extends Model 
{

    protected $table = 'spaceship_seat_prices';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function spaceshipSeat()
    {
        return $this->belongsTo('App\SpaceshipSeat', 'spaceship_seat_id');
    }

    public function flight()
    {
        return $this->belongsTo('App\Flight', 'flight_id');
    }

    public function bookings()
    {
        return $this->hasMany('App\Booking', 'spaceship_seat_price_id');
    }

}