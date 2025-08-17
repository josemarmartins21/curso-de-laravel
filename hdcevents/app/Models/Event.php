<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Altera as propriedades para serem interpretadas 
     * de mainupuladas Com o PHP
     * @return array
     * @var array
     * @author Josimar Martins
     */
    protected $casts  = [
        'items' => 'array',
        'date' => 'datetime',
        
    ];

    protected $guarded = [];

    // protected $date = ['date'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
