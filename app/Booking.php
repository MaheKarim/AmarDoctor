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
}
