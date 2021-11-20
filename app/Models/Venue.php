<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Venue extends Model
{
    use HasFactory;

    // eloquent relationships
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
