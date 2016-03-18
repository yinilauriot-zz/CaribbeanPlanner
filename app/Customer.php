<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'bride_name',
        'bridegroom_name',
        'address',
        'postal_code',
        'city',
        'country',
        'telephone',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function event()
    {
        return $this->hasOne('App\Event');
    }

    public function getBrideNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getBridegroomNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getAddressAttribute($value)
    {
        return ucwords($value);
    }

    public function getCityAttribute($value)
    {
        return ucwords($value);
    }

    public function getCountryAttribute($value)
    {
        return ucwords($value);
    }
}
