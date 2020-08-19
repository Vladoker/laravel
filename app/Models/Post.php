<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Post extends Model
{
    public function categories()
    {
        return $this->belongsTo(Post::class, 'category_posts_id');
    }

    public function coments()
    {
        return $this->morphMany('App\Models\Coment', 'comentable');
    }
}
