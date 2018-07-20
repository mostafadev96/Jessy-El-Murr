<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public $table = "testimonials";

    protected $hidden = [
        'id','created_at','updated_at'
    ];

}
