<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected  $guarded = [  ];

    public function get_doctor_info()
    {
        return $this->belongsTo('App\User', 'doctor_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    public function Status()
    {
        return $this->belongsTo('App\Status', 'status', 'id');
    }

    public function get_doctor_details()
    {
        return $this->belongsTo('App\Doctor', 'doctor_id', 'user_id');
    }


}
