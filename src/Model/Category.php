<?php

namespace NtSchool\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}