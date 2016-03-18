<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'article_id',
        'title',
        'uri',
        'size',
        'type'
    ];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }

    public function getTitleAttribute($value)
    {
        return ucwords($value);
    }
}
