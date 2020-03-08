@extends('layouts.user_layout')


@section('style')
    <link href="{{ asset('property/image-upload/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="{{ asset('property/image-upload/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet"
          type="text/css"/>
@endsection
@section('content')
    <!--Page Title Start-->
    <div class="pageTitle">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-heading">Add Property</h1>
                </div>
                <div class="col-md-4">
                    <div class="breadCrumb"><a href="{{route('/')}}">Home</a> / <span>Add Property</span></div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{route('user.property.store')}}" method="POST" enctype="multipart/form-data" data-parsley-validate>
        @csrf
        <div class="section">
            <div class="container">
                <div class="col-md-12">
                    @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                    @endif
                </div>
                <div class="userccount">
                    <div class="col-md-4 pull-right">
                        <div class="x_content">
                            <div class="image">
                                <div class="image">
                                    <img id="blah" src="{{ asset('property/images/' . 'download.jpg') }}"
                                         class="img-responsive img-rounded"
                                         style="width: 150px; height: 150px; margin: 0 auto">
                                </div>
                                <input type="file" name="image" id="file" class="inputfile btn btn-primary"
                                       onchange="readURL(this);"/>
                                <br>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="formpanel">
                        <div class="formrow">

                            <label>Featured Property *</label>
                            <strong><span class="radiobtn">
                        <input type="radio" name="featured" value="1">
                        <i class="checkmark"></i> Yes</span></strong> <strong><span class="radiobtn">
                        <input type="radio" name="featured" value="0">
                        <i class="checkmark"></i> No</span></strong>
                        </div>
                        <div class="formrow">

                            <label>Listing Mode *</label>
                            <strong><span class="radiobtn">
                        <input type="radio" name="listing_mode" value="1">
                        <i class="checkmark"></i> Residential</span></strong> <strong><span class="radiobtn">
                        <input type="radio" name="listing_mode" value="2">
                        <i class="checkmark"></i> Commercial</span></strong>
                        </div>
                        <div class="formrow">

                            <label>Listing Type *</label>
                            <strong><span class="radiobtn">
                        <input type="radio" name="listing_type" value="1">
                        <i class="checkmark"></i> For Sale</span></strong> <strong><span class="radiobtn">
                        <input type="radio" name="listing_type" value="2">
                        <i class="checkmark"></i> To Rent</span></strong>
                        </div>
                        <div class="formrow">
                            <label>Property Type *</label>
                            <select class="form-control" name="property_type">
                                <option value="">Choose Property Type</option>
                                @foreach ($propertyTypes as $types)
                                    <option value="{{$types->id}}">{{$types->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="adprice">
                            <h5>Asking Price</h5>
                            <div class="frminbx">
                                <div class="formrow" id="rent">
                                    <h4>Rent Period *</h4>
                                    <strong><span class="radiobtn">
                                <input type="radio" name="rent_period" value="1">
                                <i class="checkmark"></i> Monthly</span></strong>
                                    <strong><span class="radiobtn">
                                <input type="radio" name="rent_period" value="2">
                                <i class="checkmark"></i> Quarterly</span> </strong>
                                    <strong><span class="radiobtn">
                                <input type="radio" name="rent_period" value="3">
                                <i class="checkmark"></i> Annually</span> </strong>
                                </div>
                                <div class="formrow" id="amount">
                                    <div class="input-group"><span class="input-group-addon">£</span>
                                        <input type="number" name="rent_amount" class="form-control"
                                               placeholder="Enter Price" data-parsley-trigger="keyup"
                                               data-parsley-required="true" data-parsley-type="integer">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5>Property Location</h5>
                        <div class="formrow">
                            <select name="country" class="form-control" data-parsley-trigger="keyup"
                                    data-parsley-required="true">
                                <option value="">Select Country *</option>
                                <option value="1">Pakistan</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="formrow">
                                    <input type="number" name="post_code" class="form-control" placeholder="Full Postcode"
                                           data-parsley-type="integer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow">
                                    <input type="text" name="property_no" class="form-control"
                                           placeholder="Property number or name *" data-parsley-trigger="keyup"
                                           data-parsley-required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow">
                                    <input type="text" name="street" class="form-control" placeholder="Street Name *"
                                           data-parsley-trigger="keyup" data-parsley-required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow">
                                    <input type="text" name="area_town_city" class="form-control"
                                           placeholder="Area, Town or City *" data-parsley-trigger="keyup"
                                           data-parsley-required="true">
                                </div>
                            </div>
                        </div>

                        <h5>Listing Description</h5>
                        <div class="formrow">
                            <textarea class="form-control" name="property_description"
                                      placeholder="Property Details"></textarea>
                            <div class="fieldlimit">Alert / Guidelines: Don't include any contact details, email address
                                or any website link
                            </div>
                        </div>

                        <h5>Location information</h5>
                        <div class="formrow">
                            <textarea class="form-control" name="location_description"
                                      placeholder="Location information"></textarea>
                            <div class="fieldlimit">400 Characters Remaining</div>
                        </div>

                        <h5>Property Key Features</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>no. of Bedroom (s) *</label>
                                    <select name="bed" class="form-control" data-parsley-trigger="keyup"
                                            data-parsley-required="true">
                                        <option value="">Select Bedroom</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>no. of Bathroom (s) *</label>
                                    <select name="bath" class="form-control" data-parsley-trigger="keyup"
                                            data-parsley-required="true">
                                        <option value="">Select Bathroom</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>no. of Reception (s) *</label>
                                    <select name="reception" class="form-control" data-parsley-trigger="keyup"
                                            data-parsley-required="true">
                                        <option value="">Select Reception</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>no. of Floors *</label>
                                    <select name="floor" class="form-control" data-parsley-trigger="keyup"
                                            data-parsley-required="true">
                                        <option value="">Select Floor</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Council tax charges</label>
                                    <input type="number" name="tax" class="form-control" placeholder="e.g £110 per month"
                                           data-parsley-type="integer" data-parsley-trigger="keyup">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Stamp Duty cost</label>
                                    <input type="number" name="duty" class="form-control" placeholder="e.g £16,250"
                                           data-parsley-type="integer" data-parsley-trigger="keyup">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Service Charge</label>
                                    <input type="number" name="service_charges" class="form-control"
                                           placeholder="e.g £10 per month." data-parsley-type="integer"
                                           data-parsley-trigger="keyup">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Ground rent</label>
                                    <input type="number" name="ground_rent" class="form-control"
                                           placeholder="e.g £10,000 per annum" data-parsley-type="integer"
                                           data-parsley-trigger="keyup">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Property Size*</label>
                                    <input type="number" name="property_size" class="form-control"
                                           placeholder="384 approx." data-parsley-trigger="keyup">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Unit</label>
                                    <select name="unit" class="form-control">
                                        <option value="">Select Unit</option>
                                        @foreach ($Unit as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Lease Expires on *</label>
                                    <input type="text" name="lease_expiry_date" class="form-control"
                                           placeholder="Choose Date">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>EPC Rating</label>
                                    <select name="epc_rating" class="form-control">
                                        <option value="">Select Rating</option>
                                        @foreach( Config::get('property.rating_array') as $value => $item )
                                            <option value="{{$value}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="formrow">
                                    <label>Local Authority</label>
                                    <input type="text" name="local_autority" class="form-control"
                                           placeholder="e.g City of London">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="formrow">
                                    <label>Parking</label>
                                    <select name="parking_no" class="form-control">
                                        <option value="">Select Parking</option>
                                        @foreach (Config::get('property.parking_array') as $value => $item)
                                            <option value="{{$value}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label>Outside Space</label>
                                    <select name="outside_space" class="form-control">
                                        <option value="">Select Outside Space</option>
                                        @foreach (Config::get('property.outside_specs_array') as $value => $item)
                                            <option value="{{$value}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Water Bill Included</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="water_bill" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Bills Included</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="bill" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Wood Floors</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="wooden_floor" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Garden</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="garden" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Parking</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="parking" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Furnished</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="furnished" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Fireplace</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="fire_place" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Terrace</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="terrace" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Balcony</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="balcony" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Basement</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="basement" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>DSS Allowed</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="dds" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Pet Friendly</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="pet" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Swimming Pool</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="swimming_pool" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>Central Heating</label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="central_heated" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label>WiFi </label>
                                    <label class="switch switch-green">
                                        <input type="checkbox" class="switch-input" name="wifi" value="1">
                                        <span class="switch-label" data-on="Yes" data-off="No"></span> <span
                                                class="switch-handle"></span> </label>
                                </div>
                            </div>
                        </div>

                        <h5>Upload Photos</h5>
                        <div id="photosvids">
                            <div class="uploadphotobx">
                                <h4>Upload your photos</h4>
                                <p>You can upload max 20 photos and 1 Video</p>
                                <label class="uploadBox">Click here to Upload
                                    <input type="file" name="upload[]" multiple>
                                </label>
                            </div>
                            <div class="atchfiles">
                                <div class="fileattached"><strong>Image 1 (main)</strong> <a href="#" class="cls"><i
                                                class="fa fa-times"></i></a> <img src="images/property/thumb-07.jpg"
                                                                                  alt="">

                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="formrow"><strong><span class="checkbtn">
                        <input type="checkbox" name="type">
                        <i class="checkmark"></i> Agree to The Terms and Conditions.</span></strong></div>
                        <div class="formrow"><strong><span class="checkbtn">
                        <input type="checkbox" name="type">
                        <i class="checkmark"></i> I wish to receive information from property or selected partners.</span></strong>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Submit Listing
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="largebanner shadow3">
        <div class="adin">
            <img src="http://sharjeelanjum.com/demos/jobsportal/public/images/google-ad-wide.jpg" alt="">
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
@section('jsscript')
    <script type="text/javascript">

        // $(document).ready(function() {
        //     var radio = $('input[name="listing_type"]:checked').val();

        //     // var updateDay = $radio.val();
        //     // var id = $radio.attr('id');
        //     console.log(radio);
        // });
        $(document).ready(function () {
            $('#rent').hide();
            $('input[name="listing_type"]').change(function () {
                // alert('ole');
                if ($(this).val() == 2) {
                    $('#rent').show();
                    $('#amount').hide();
                } else {
                    $('#rent').hide();
                    $('#amount').show();
                }
            });
        });


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#file").change(function () {
            readURL(this);
        });
    </script>



@endsection

@section('script')
    <link href="https://code.jquery.com/jquery-3.3.1.min.js" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('property/image-upload/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>


    <script src="{{ asset('property/image-upload/js/plugins/piexif.js') }}" type="text/javascript"></script>
    <script src="{{ asset('property/image-upload/js/plugins/sortable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('property/image-upload/js/fileinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('property/image-upload/js/locales/fr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('property/image-upload/js/locales/es.js') }}" type="text/javascript"></script>
    <script src="{{ asset('property/image-upload/themes/fas/theme.js') }}" type="text/javascript"></script>
    <script src="{{ asset('property/image-upload/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>


    <script>
        $(document).ready(function () {
            $("#kv-explorer").fileinput({
                'theme': 'explorer-fas',
                overwriteInitial: false,
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                maxFileSize: 1000,
                maxFilesNum: 10,
            });
        })
    </script>
@endsection