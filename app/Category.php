<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $guarded =[ ];

    public function Doctors()
    {
        return $this->hasMany('App\Doctor');
    }
    public function Nurse()
    {
        return $this->hasMany('App\Nurse');
    }
}
