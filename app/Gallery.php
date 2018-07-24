<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * @var string
     */
    public $table = "galleries";
    /**
     * @var array
     */
    protected $hidden = [
        'album_id','created_at','updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Album()
    {
        return $this->belongsTo('App\Album');
    }
}
