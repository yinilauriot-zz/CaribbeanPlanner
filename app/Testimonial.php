<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'user_id',
        'comment',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
