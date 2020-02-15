<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected  $guarded = [  ];

    public function Doctor()
    {
        return $this->belongsTo('App\Doctor');
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
