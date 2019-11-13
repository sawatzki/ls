<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['author_id', 'category_id', 'title', 'price', 'language'];
}
