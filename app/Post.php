<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $dates = ['created_at', 'updated_at'];
    protected $casts = [
        'created_at' => 'datetime:F j, Y - g:ia',
    ];
}
