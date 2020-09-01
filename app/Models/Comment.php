<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //protected $keyType = 'string';
    public $guarded = [''];

    public function commentable()
    {
        return $this->morphTo();
    }
}
