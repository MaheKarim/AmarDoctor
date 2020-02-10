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
        return $this->belongsTo('App\Area', 'area_name_id','id');
    }
    public function Category()
    {
        return $this->belongsTo('App\Category' ,'category_name_id' ,'id');
    }

    public function user()
    {
        return $this->belongsTo('App\user');
    }

}
