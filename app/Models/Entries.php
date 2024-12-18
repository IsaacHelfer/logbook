<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'aircraft_id',
        'category_id',
        'category_time',
        'type_id',
        'type_time',
        'day_time',
        'night_time',
        'xc_time',
        'actual_instrument',
        'sim_instrument',
        'num_instrument_app',
        'day_landings',
        'night_landings',
        'total_duration',
        'remarks',
    ];

    public function aircraft()
    {
        return $this->hasOne(Aircraft::class);
    }

    public function category()
    {
        return $this->hasOne(FlightCategories::class);
    }

    public function flightTypes()
    {
        return $this->hasOne(FlightTypes::class);
    }
}
