<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $guarded = [' '];

    public function user()
    {
        return $this->belongsTo(User::all());
    }
}
