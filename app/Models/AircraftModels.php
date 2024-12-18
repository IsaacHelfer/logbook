<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AircraftModels extends Model
{
    use HasFactory;

    protected $fillable = [
      'model',
    ];

    public function aircraft()
    {
        return $this->hasMany(Aircraft::class);
    }
}
