<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    //
    protected $guarded = [ ];
   // Relation define
    public function nursing_service_details ()
    {
        return $this->belongsTo('App\NursingService', 'nursing_service_id', 'id');
    }
}
