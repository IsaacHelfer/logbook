<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightCategories extends Model
{
    use HasFactory;

    protected $fillable = [
      'category',
    ];

    public function entries()
    {
        return $this->belongsTo(Entries::class);
    }
}
