<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $table = "videos";

    protected $hidden = [
        'id','created_at','updated_at'
    ];
}
