<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function recipes()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function coments()
    {
        return $this->morphMany('App\Models\Coment', 'comentable');
    }
}
