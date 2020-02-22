<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [ ];

    public function user_info ()
    {
        return $this->belongsTo('App\User');
    }

    public function product_booking_info ()
    {
        return $this->belongsTo('App\ProductBooking');
    }
}
