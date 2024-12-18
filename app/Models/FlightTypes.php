<?php

namespace App\Models;

use Dotenv\Parser\Entry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightTypes extends Model
{
    use HasFactory;

    protected $fillable = [
      'type',
    ];

    public function entries()
    {
        return $this->belongsTo(Entries::class);
    }
}
