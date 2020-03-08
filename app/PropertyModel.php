<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyModel extends Model
{
    protected $fillable = [

        'featured_property','listing_mode','listing_type','property_type_id','rent_period','rent_amount','country','post_code','property_no','street','area_town_city','property_description','location_description','bed','bath','reception','floor','tax','duty','service_charges','ground_rent','property_size','unit','lease_expiry_date','epc_rating','local_autority','parking_no','outside_space','water_bill','bill','wooden floor','garden','parking','furnished','fire_place','terrace','balcony','basement','dds','pet','swimming_pool','central_heated','wifi','images','expire_at','created_by'

    ];

    public  function propertyType(){
        return $this->belongsTo('App\PropertyTypeModel','property_type_id');
    }
    public  function Unit(){
        return $this->belongsTo('App\UnitModel','unit');
    }
    public  function User(){
        return $this->belongsTo('App\User','created_by');
    }

    public  function image(){
        return $this->hasMany('App\Image', 'property_id');
    }
}
