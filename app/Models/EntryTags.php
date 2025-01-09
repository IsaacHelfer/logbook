<?php

namespace App\Models;

use Dotenv\Parser\Entry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryTags extends Model
{
    use HasFactory;

    protected $fillable = [
        'entry_id',
        'tag_id',
    ];
}
