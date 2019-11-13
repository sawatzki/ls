<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['author_id', 'category_id', 'title', 'price', 'language'];

    public function scopeOrdered($query)
    {
        return $query->orderBy('title', 'asc');
    }

    public function __toString()
    {
        return $this->title;
    }
}
