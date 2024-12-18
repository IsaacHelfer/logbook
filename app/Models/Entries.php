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
        return $this->belongsTo(Aircraft::class);
    }

    public function category()
    {
        return $this->belongsTo(FlightCategories::class);
    }

    public function type()
    {
        return $this->belongsTo(FlightTypes::class);
    }
}
