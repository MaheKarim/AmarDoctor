<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NursingService extends Model
{
    // Start Code Here
    protected $guarded = [ ];
    public function contact_form_details ()
    {
        return $this->belongsTo('App\ContactForm');
    }
}
