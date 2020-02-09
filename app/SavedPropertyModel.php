<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedPropertyModel extends Model
{
    protected $fillable = [


        'user_id','property_id'

    ];

    public  function User(){
        return $this->belongsTo('App\User','created_by');
    }
    public function Propertry(){
        return $this->belongsTo('App\PropertyModel','property_id');
    }
}
