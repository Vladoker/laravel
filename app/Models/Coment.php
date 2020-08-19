<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    //protected $keyType = 'string';
    public function comentable()
    {
        return $this->morphTo();
    }
}
