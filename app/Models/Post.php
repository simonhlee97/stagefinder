<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protect all attributes (no mass assignment allowed)
    protected $guarded = [];

    // All attributes except "id" allowed to be mass assigned
    // protected $guarded = ['id'];

    // title, body are allowed to be mass assigned
    // protected $fillable = ['title', 'body'];


    // Eloquent Relationships
    public function category()
    {   // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
