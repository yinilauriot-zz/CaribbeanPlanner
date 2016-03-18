<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = ['event_date'];

    protected $fillable = [
        'customer_id',
        'event_name',
        'event_date',
        'event_place',
        'status',
    ];

    public function customer()
    {
        return $this->belongsto('App\Customer');
    }

    public function article()
    {
        return $this->hasOne('App\Article');
    }

    public function getEventDateAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function getDateEnglish()
    {
        $date = $this->event_date;
        $date = explode('/', $date);
        $newdate = $date[2].'-'.$date[1].'-'.$date[0];
        return $newdate;
    }

    public function setEventDateAttribute($value)
    {
        $maDate = Carbon::createFromFormat('Y-m-d', $value);
        $this->attributes['event_date'] = (empty($value)) ? '0000-00-00 00:00:00' : $maDate;
    }

    public function getEventNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getEventPlaceAttribute($value)
    {
        return ucwords($value);
    }
}
