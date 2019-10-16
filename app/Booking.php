<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model 
{

    protected $table = 'bookings';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function spaceshipSeatPrice()
    {
        return $this->belongsTo('App\SpaceshipSeatPrice', 'spaceship_seat_price_id');
    }

}