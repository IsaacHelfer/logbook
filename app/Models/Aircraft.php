<?php

namespace App\Models;

use Dotenv\Parser\Entry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $fillable = [
        'make_id',
        'model_id',
        'identifier',
    ];

    public function make()
    {
        return $this->belongsTo(AircraftMakes::class);
    }

    public function model()
    {
        return $this->belongsTo(AircraftModels::class);
    }

    public function entries()
    {
        return $this->hasOne(Entries::class);
    }
}
