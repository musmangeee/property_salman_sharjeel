<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\PropertyModel;
use App\PropertyTypeModel;
use App\UnitModel;
use App\SavedPropertyModel;
use Auth;
use Session;
use Image;
use Storage;

class PropertyController extends Controller
{

    public function __construct()
    {
        // $this->middleware(['auth' => 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = PropertyModel::orderBy('created_at', 'desc')->paginate(5);
        $total = PropertyModel::count();
        return view('pages.user.property.index', compact('property', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propertyTypes = PropertyTypeModel::all();
        $Unit = UnitModel::all();
        return view('pages.user.property.create', compact('propertyTypes', 'Unit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = new PropertyModel();

        // dd($request);
        $validator = validator::make($request->all(), [
            'listing_mode' => 'required',
            'listing_type' => 'required',
            'property_type' => 'required',
            'rent_period' => 'required',
            'rent_amount' => 'required',
            'country' => 'required',
            'street' => 'required',
            'area_town_city' => 'required',
            'property_no' => 'required',
            'bed' => 'required',
            'bath' => 'required',
            'reception' => 'required',
            'floor' => 'required',
        ]);

        $current_date = date('Y-m-d');
        $expiry_date = date('Y-m-d', strtotime($current_date. ' +30 days'));
        
        $property->listing_mode = $request->listing_mode;
            $property->featured_property = $request->featured;
            $property->listing_type = $request->listing_type;
            $property->property_type_id = $request->property_type;
            $property->rent_period = $request->rent_period;
            $property->rent_amount = $request->rent_amount;
            $property->country = $request->country;
            $property->post_code = $request->post_code;
            $property->property_no = $request->property_no;
            $property->street = $request->street;
            $property->area_town_city = $request->area_town_city;
            $property->property_description = $request->property_description;
            $property->location_description = $request->location_description;
            $property->bed = $request->bed;
            $property->bath = $request->bath;
            $property->reception = $request->reception;
            $property->floor = $request->floor;
            $property->tax = $request->tax;
            $property->duty = $request->duty;
            $property->service_charges = $request->service_charges;
            $property->ground_rent = $request->ground_rent;
            $property->property_size = $request->property_size;
            $property->unit = $request->unit;
            $property->lease_expiry_date = $request->lease_expiry_date;
            $property->epc_rating = $request->epc_rating;
            $property->local_autority = $request->local_autority;
            $property->parking_no = $request->parking_no;
            $property->outside_space = $request->outside_space;
            $property->water_bill = $request->water_bill;
            $property->bill = $request->bill;
            $property->wooden_floor = $request->wooden_floor;
            $property->garden = $request->garden;
            $property->parking = $request->parking;
            $property->furnished = $request->furnished;
            $property->fire_place = $request->fire_place;
            $property->terrace = $request->terrace;
            $property->balcony = $request->balcony;
            $property->basement = $request->basement;
            $property->dds = $request->dds;
            $property->pet = $request->pet;
            $property->swimming_pool = $request->swimming_pool;
            $property->central_heated = $request->central_heated;
            $property->wifi = $request->wifi;
            $property->expire_at = $expiry_date;
            $property->created_by = Auth::user()->id;


        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('property/images/'.$filename);
            // dd($location);
            Image::make($image)->resize(130, 130)->save($location);
            $oldfilename = $property->images;
            $property->images = $filename;
            Storage::delete($oldfilename);
        }
        
        //dd($current_date, $expiry_date);
        
        if($validator->passes()) {
            
            $property->save();
        
            Session::flash('success', 'property has been added successfully.');
            //Session::flash('info', 'Tenant will be recieving an email for the account confirmation  ');
            return redirect()->route('user.property.create');
        }
        else{

            Session::flash('error', 'Fields with * must be filled.');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = PropertyModel::findOrFail($id);
        return view('pages.user.property.detail', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function savedProperty(){
        $savedProperty = SavedPropertyModel::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        // dd($savedProperty);
        return view('pages.user.property.saved_property',compact('savedProperty'));
    }
    public function savedPropertyStore(Request $request){
        
        $validator = validator::make($request->all(), [

            'property_id' => 'required|unique:saved_property_models,property_id',
        ]);

        $saveProperty = new SavedPropertyModel();

        $saveProperty->user_id = Auth::user()->id;
        $saveProperty->property_id =  $request->property_id;
        
        if($validator->passes()){
            $saveProperty->save();
            Session::flash('success', 'Your property has been added in favourite list successfully.');
            return redirect()->back();
        }else{
            Session::flash('error', 'This property is already in your favourite list.');
            return redirect()->back();
        }
    }

    public function saleProperty(){
        $sale = PropertyModel::where('listing_type', 1)->orderBy('created_at', 'desc')->paginate(5);

        return view('pages.user.property.sale_property',compact('sale'));
    }

    public function rentProperty(){
        $rent = PropertyModel::where('listing_type', 2)->orderBy('created_at', 'desc')->paginate(5);
        
        return view('pages.user.property.rent_property',compact('rent'));
    }

    public function myProperty($id){

        $myProperty = PropertyModel::where('created_by', $id)->paginate(5);
    
        return view('pages.user.property.my_property', compact('myProperty'));
    }

    public function expireProperty($id){

        $expireProperty = PropertyModel::where('created_by', $id)->paginate(5);
    
        return view('pages.user.property.expire_property', compact('expireProperty'));
    }



    public function myAgentProperty($id){

        $myProperty = PropertyModel::where('created_by', $id)->paginate(5);
    
        return view('pages.user.agent_property.my_property', compact('myProperty'));
    }

    public function expireAgentProperty($id){

        $expireProperty = PropertyModel::where('created_by', $id)->paginate(5);
    
        return view('pages.user.agent_property.expire_property', compact('expireProperty'));
    }


}
