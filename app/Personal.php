<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public $table = "perosnals";

    protected $hidden = [
        'created_at','updated_at'
    ];

}
