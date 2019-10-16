<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelCategory extends Model 
{

    protected $table = 'travel_categories';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function spaceshipSeats()
    {
        return $this->hasMany('App\SpaceshipSeat', 'travel_category_id');
    }

}