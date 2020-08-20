<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model 
{
    public function recipes()
    {
        return $this->belongsTo(CategoryRecipe::class, 'categorie_recipe_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
