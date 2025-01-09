<?php

namespace App\Models;

use Dotenv\Parser\Entry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function entries()
    {
        return $this->belongsToMany(Entry::class, 'entry_tag', 'tag_id', 'entry_id');
    }
}
