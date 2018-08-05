<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    public $table = "biographies";

    protected $hidden = [
        'created_at','updated_at'
    ];
}
