<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $casts = [
        'items' => 'array'
    ];

    protected $date = ['date'];
}
