<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Meny extends Model
{
    protected $table = 'menys';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
