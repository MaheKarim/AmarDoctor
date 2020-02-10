<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Area;

class Doctor extends Model
{
    //
    protected  $guarded = [ ];

    public function Area()
         {
             return $this->belongsTo('App\Area');
         }
    public function Category()
         {
             return $this->belongsTo('App\Category');
         }

         // relation with user table
    public function user()
    {
        return $this->belongsTo('App\user');
    }

}
