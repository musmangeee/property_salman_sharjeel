<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedPropertyModel extends Model
{
    protected $fillable = [


        'user_id','property_id'

    ];

    
    public  function propertyType(){
        return $this->belongsTo('App\PropertyTypeModel','property_type_id');
    }
    public  function Unit(){
        return $this->belongsTo('App\UnitModel','unit');
    }
    public  function User(){
        return $this->belongsTo('App\User','user_id');
    }
    public  function Property(){
        return $this->belongsTo('App\PropertyModel','property_id');
    }
}
