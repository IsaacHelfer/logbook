<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AircraftMakes extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
    ];

    public function aircraft()
    {
        return $this->hasMany(Aircraft::class);
    }
}
