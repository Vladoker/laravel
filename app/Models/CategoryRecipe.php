<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryRecipe extends Model
{
    public function recipes()
    {
        return $this->hasMany(Recipe::class, 'categorie_recipe_id');
    }

    public function scopeActive($query) {
        return $query->where('status', 1);
    }
}
