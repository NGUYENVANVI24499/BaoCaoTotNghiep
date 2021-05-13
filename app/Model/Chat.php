<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'author',
        'content',
    ];
}
