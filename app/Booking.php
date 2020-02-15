<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected  $guarded = [  ];

    public function doctor()
    {
        return $this->belongsTo('App\User','doctor_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    public function Status()
    {
        return $this->belongsTo('App\Status');
    }

}
