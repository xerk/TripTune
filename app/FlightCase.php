<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightCase extends Model 
{

    protected $table = 'flight_cases';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function flight()
    {
        return $this->belongsTo('App\Flight', 'flight_id');
    }

}