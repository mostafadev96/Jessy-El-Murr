<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $table = "episodes";

    protected $hidden = [
        'created_at','updated_at'
    ];

}
