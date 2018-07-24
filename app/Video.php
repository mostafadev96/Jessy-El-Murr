<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $table = "videos";

    protected $hidden = [
        'created_at','updated_at'
    ];
}
