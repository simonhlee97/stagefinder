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

    public static function find($slug)
    {
        $venue = static::all()->firstWhere('slug', $slug);
        if (!$venue) {
            throw new ModelNotFoundException();
        }
        return $venue;

        if (!file_exists($path = resource_path("venues/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }
        $venue = cache()->remember("venues.{$slug}", now()->addDays(7), fn () => file_get_contents($path));
    }


    // eloquent relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
