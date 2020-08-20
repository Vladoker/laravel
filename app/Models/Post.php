<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo(CategoryPost::class, 'category_post_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
