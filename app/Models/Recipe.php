<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function category_recipe()
    {
        return $this->belongsTo(CategoryRecipe::class, 'categorie_recipe_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function scopeActive($query, $status = 1){
        return $query->where('status', $status);
    }

    public function scopeBySlug($query, $slug){
        return $query->where('slug', $slug);
    }
}
