<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $table = "albums";

    protected $hidden = [
        'created_at','updated_at'
    ];

    public function photos()
    {
        return $this->hasMany('App\Gallery')->get();
    }
}
