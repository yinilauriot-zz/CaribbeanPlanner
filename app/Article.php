<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'event_id',
        'title',
        'content_1',
        'content_2',
        'content_3',
        'content_4',
        'status',
    ];

    public function event()
    {
        return $this->belongsto('App\Event');
    }

    public function pictures()
    {
        return $this->hasMany('App\Picture');
    }

    public function review()
    {
        return $this->hasOne('App\Review');
    }

    public function getTitleAttribute($value)
    {
        return ucwords($value);
    }
}
