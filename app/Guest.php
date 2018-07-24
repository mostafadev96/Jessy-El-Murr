<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public $table = "guests";

    protected $hidden = [
        'created_at','updated_at'
    ];

}
