<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug'
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }

}