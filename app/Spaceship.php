<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spaceship extends Model 
{

    protected $table = 'spaceships';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function spaceshipSeats()
    {
        return $this->hasMany('App\SpaceshipSeat', 'spaceship_id');
    }

}