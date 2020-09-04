<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    public function posts()
    {
        return $this->hasMany(\TCG\Voyager\Models\Post::class, 'category_id');
    }
}
