@extends('layouts.user_layout')

@section('content')
<!--Search Block-->
<div class="searchWraper">
    <div class="searchsection">
      <div class="container">
        <h1>Find Your Dream Property</h1>
        <h2>Lorem ipsum dolor sit amet, epicuri fierent mediocritatem nam et</h2>
        <div class="uitabs">
          <ul class="nav nav-tabs" id="searchtabs" role="tablist">
            <li class="nav-item"><a data-toggle="tab" class="nav-link active" id="sale-tab" role="tab" href="#forsale">For Sale</a></li>
            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#rent">For Rent</a></li>
            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#wanted">Wanted</a></li>
            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#findagent">Find Agent</a></li>
          </ul>
        </div>
        <div class="formwrap">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="forsale" role="tabpanel" aria-labelledby="sale-tab">
              <div class="srchbox">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="e.g House for sale in New York or Listing ID">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
                <div class="row srcsubfld">
                  <div class="col-md-3">
                    <label>Property type</label>
                    <select name="" id="" class="form-control">
                      <option value="" selected="selected">Any</option>
                      <option value="3">Houses</option>
                      <option value="3">Flats / Apartments</option>
                      <option value="3">Bungalows</option>
                      <option value="3">Land</option>
                      <option value="3">Barn Conversion</option>
                      <option value="3">Boats / Houseboat</option>
                      <option value="3">Character Property</option>
                      <option value="3">Contemporary</option>
                      <option value="3">Cottage</option>
                      <option value="3">Equestrian Property </option>
                      <option value="3">Farms</option>
                      <option value="3">Farmhouse</option>
                      <option value="3">Houseboat / Boats</option>
                      <option value="3">Investment </option>
                      <option value="3">Lodge</option>
                      <option value="3">Maisonette</option>
                      <option value="3">Mobile / Park Home</option>
                      <option value="3">Mews House</option>
                      <option value="9">Retirement</option>
                      <option value="3">Non-Retirement</option>
                      <option value="3">Room Only</option>
                      <option value="3">Penthouse</option>
                      <option value="3">Plot Files</option>
                      <option value="3">Retirement</option>
                      <option value="3">Students</option>
                      <option value="3">Swapping</option>
                      <option value="3">Villa</option>
                      <option value="3">Waterside</option>
                      <option value="3">Others</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Bedrooms</label>
                    <select class="form-control">
                      <option>Any</option>
                      <option>Studio</option>
                      <option>1+</option>
                      <option>2+</option>
                      <option>3+</option>
                      <option>4+</option>
                      <option>5+</option>
                      <option>6+</option>
                      <option>7+</option>
                      <option>8+</option>
                      <option>9+</option>
                      <option>10+</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Min Price (in £)</label>
                    <select class="form-control">
                      <option>No Min</option>
                      <option value="5000">5,000</option>
                      <option value="10000">10,000</option>
                      <option value="15000">15,000</option>
                      <option value="25000">25,000</option>
                      <option value="50000">50,000</option>
                      <option value="60000">60,000</option>
                      <option value="70000">70,000</option>
                      <option value="80000">80,000</option>
                      <option value="90000">90,000</option>
                      <option value="100000">100,000</option>
                      <option value="110000">110,000</option>
                      <option value="120000">120,000</option>
                      <option value="125000">125,000</option>
                      <option value="130000">130,000</option>
                      <option value="140000">140,000</option>
                      <option value="150000">150,000</option>
                      <option value="160000">160,000</option>
                      <option value="170000">170,000</option>
                      <option value="175000">175,000</option>
                      <option value="180000">180,000</option>
                      <option value="190000">190,000</option>
                      <option value="200000">200,000</option>
                      <option value="210000">210,000</option>
                      <option value="220000">220,000</option>
                      <option value="230000">230,000</option>
                      <option value="240000">240,000</option>
                      <option value="250000">250,000</option>
                      <option value="260000">260,000</option>
                      <option value="270000">270,000</option>
                      <option value="280000">280,000</option>
                      <option value="290000">290,000</option>
                      <option value="300000">300,000</option>
                      <option value="325000">325,000</option>
                      <option value="350000">350,000</option>
                      <option value="375000">375,000</option>
                      <option value="400000">400,000</option>
                      <option value="425000">425,000</option>
                      <option value="450000">450,000</option>
                      <option value="475000">475,000</option>
                      <option value="500000">500,000</option>
                      <option value="550000">550,000</option>
                      <option value="600000">600,000</option>
                      <option value="650000">650,000</option>
                      <option value="700000">700,000</option>
                      <option value="800000">800,000</option>
                      <option value="900000">900,000</option>
                      <option value="1000000">1,000,000</option>
                      <option value="1250000">1,250,000</option>
                      <option value="1500000">1,500,000</option>
                      <option value="1750000">1,750,000</option>
                      <option value="2000000">2,000,000</option>
                      <option value="2500000">2,500,000</option>
                      <option value="3000000">3,000,000</option>
                      <option value="4000000">4,000,000</option>
                      <option value="5000000">5,000,000</option>
                      <option value="7500000">7,500,000</option>
                      <option value="10000000">10,000,000</option>
                      <option value="15000000">15,000,000</option>
                      <option value="20000000">20,000,000</option>
                      <option value="30000000">30,000,000</option>
                      <option value="40000000">40,000,000</option>
                      <option value="50000000">50,000,000</option>
                      <option value="60000000">60,000,000</option>
                      <option value="70000000">70,000,000</option>
                      <option value="80000000">80,000,000</option>
                      <option value="90000000">90,000,000</option>
                      <option value="90000000+">99,000,000</option>
                      <option value="">No Min</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Max Price (in £)</label>
                    <select class="form-control">
                      <option>No Max</option>
                      <option value="5000">5,000</option>
                      <option value="10000">10,000</option>
                      <option value="15000">15,000</option>
                      <option value="25000">25,000</option>
                      <option value="50000">50,000</option>
                      <option value="60000">60,000</option>
                      <option value="70000">70,000</option>
                      <option value="80000">80,000</option>
                      <option value="90000">90,000</option>
                      <option value="100000">100,000</option>
                      <option value="110000">110,000</option>
                      <option value="120000">120,000</option>
                      <option value="125000">125,000</option>
                      <option value="130000">130,000</option>
                      <option value="140000">140,000</option>
                      <option value="150000">150,000</option>
                      <option value="160000">160,000</option>
                      <option value="170000">170,000</option>
                      <option value="175000">175,000</option>
                      <option value="180000">180,000</option>
                      <option value="190000">190,000</option>
                      <option value="200000">200,000</option>
                      <option value="210000">210,000</option>
                      <option value="220000">220,000</option>
                      <option value="230000">230,000</option>
                      <option value="240000">240,000</option>
                      <option value="250000">250,000</option>
                      <option value="260000">260,000</option>
                      <option value="270000">270,000</option>
                      <option value="280000">280,000</option>
                      <option value="290000">290,000</option>
                      <option value="300000">300,000</option>
                      <option value="325000">325,000</option>
                      <option value="350000">350,000</option>
                      <option value="375000">375,000</option>
                      <option value="400000">400,000</option>
                      <option value="425000">425,000</option>
                      <option value="450000">450,000</option>
                      <option value="475000">475,000</option>
                      <option value="500000">500,000</option>
                      <option value="550000">550,000</option>
                      <option value="600000">600,000</option>
                      <option value="650000">650,000</option>
                      <option value="700000">700,000</option>
                      <option value="800000">800,000</option>
                      <option value="900000">900,000</option>
                      <option value="1000000">1,000,000</option>
                      <option value="1250000">1,250,000</option>
                      <option value="1500000">1,500,000</option>
                      <option value="1750000">1,750,000</option>
                      <option value="2000000">2,000,000</option>
                      <option value="2500000">2,500,000</option>
                      <option value="3000000">3,000,000</option>
                      <option value="4000000">4,000,000</option>
                      <option value="5000000">5,000,000</option>
                      <option value="7500000">7,500,000</option>
                      <option value="10000000">10,000,000</option>
                      <option value="15000000">15,000,000</option>
                      <option value="20000000">20,000,000</option>
                      <option value="30000000">30,000,000</option>
                      <option value="40000000">40,000,000</option>
                      <option value="50000000">50,000,000</option>
                      <option value="60000000">60,000,000</option>
                      <option value="70000000">70,000,000</option>
                      <option value="80000000">80,000,000</option>
                      <option value="90000000">90,000,000</option>
                      <option value="90000000+">99,000,000</option>
                      <option value="">No Max</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Area</label>
                    <select class="form-control">
                      <option>Any</option>
                      <option>Within 1 Mile</option>
                      <option>Within 2 Miles</option>
                      <option>Within 5 Miles</option>
                      <option>Within 10 Miles</option>
                      <option>Within 15 Miles</option>
                      <option>Within 20 Miles</option>
                      <option>Within 50 Miles</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade in" id="rent">
              <div class="srchbox">
                <div class="input-group">
                  <input type="text" class="form-control label_in" id="rent_search" placeholder="e.g House for rent in New York or Listing ID">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
                <div class="row srcsubfld">
                  <div class="col-md-3">
                    <label>Property type</label>
                    <select name="" id="" class="form-control">
                      <option value="" selected="selected">Any</option>
                      <option value="3">Houses</option>
                      <option value="3">Flats / Apartments</option>
                      <option value="3">Bungalows</option>
                      <option value="3">Land</option>
                      <option value="3">Barn Conversion</option>
                      <option value="3">Boats / Houseboat</option>
                      <option value="3">Character Property</option>
                      <option value="3">Contemporary</option>
                      <option value="3">Cottage</option>
                      <option value="3">Equestrian Property </option>
                      <option value="3">Farms</option>
                      <option value="3">Farmhouse</option>
                      <option value="3">Houseboat / Boats</option>
                      <option value="3">Investment </option>
                      <option value="3">Lodge</option>
                      <option value="3">Maisonette</option>
                      <option value="3">Mobile / Park Home</option>
                      <option value="3">Mews House</option>
                      <option value="9">Retirement</option>
                      <option value="3">Non-Retirement</option>
                      <option value="3">Room Only</option>
                      <option value="3">Penthouse</option>
                      <option value="3">Plot Files</option>
                      <option value="3">Retirement</option>
                      <option value="3">Students</option>
                      <option value="3">Swapping</option>
                      <option value="3">Villa</option>
                      <option value="3">Waterside</option>
                      <option value="3">Others</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Bedrooms</label>
                    <select class="form-control">
                      <option>Any</option>
                      <option>Studio</option>
                      <option>1+</option>
                      <option>2+</option>
                      <option>3+</option>
                      <option>4+</option>
                      <option>5+</option>
                      <option>6+</option>
                      <option>7+</option>
                      <option>8+</option>
                      <option>9+</option>
                      <option>10+</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Min Price (in £)</label>
                    <select class="form-control">
                      <option>No Min</option>
                      <option value="5000">5,000</option>
                      <option value="10000">10,000</option>
                      <option value="15000">15,000</option>
                      <option value="25000">25,000</option>
                      <option value="50000">50,000</option>
                      <option value="60000">60,000</option>
                      <option value="70000">70,000</option>
                      <option value="80000">80,000</option>
                      <option value="90000">90,000</option>
                      <option value="100000">100,000</option>
                      <option value="110000">110,000</option>
                      <option value="120000">120,000</option>
                      <option value="125000">125,000</option>
                      <option value="130000">130,000</option>
                      <option value="140000">140,000</option>
                      <option value="150000">150,000</option>
                      <option value="160000">160,000</option>
                      <option value="170000">170,000</option>
                      <option value="175000">175,000</option>
                      <option value="180000">180,000</option>
                      <option value="190000">190,000</option>
                      <option value="200000">200,000</option>
                      <option value="210000">210,000</option>
                      <option value="220000">220,000</option>
                      <option value="230000">230,000</option>
                      <option value="240000">240,000</option>
                      <option value="250000">250,000</option>
                      <option value="260000">260,000</option>
                      <option value="270000">270,000</option>
                      <option value="280000">280,000</option>
                      <option value="290000">290,000</option>
                      <option value="300000">300,000</option>
                      <option value="325000">325,000</option>
                      <option value="350000">350,000</option>
                      <option value="375000">375,000</option>
                      <option value="400000">400,000</option>
                      <option value="425000">425,000</option>
                      <option value="450000">450,000</option>
                      <option value="475000">475,000</option>
                      <option value="500000">500,000</option>
                      <option value="550000">550,000</option>
                      <option value="600000">600,000</option>
                      <option value="650000">650,000</option>
                      <option value="700000">700,000</option>
                      <option value="800000">800,000</option>
                      <option value="900000">900,000</option>
                      <option value="1000000">1,000,000</option>
                      <option value="1250000">1,250,000</option>
                      <option value="1500000">1,500,000</option>
                      <option value="1750000">1,750,000</option>
                      <option value="2000000">2,000,000</option>
                      <option value="2500000">2,500,000</option>
                      <option value="3000000">3,000,000</option>
                      <option value="4000000">4,000,000</option>
                      <option value="5000000">5,000,000</option>
                      <option value="7500000">7,500,000</option>
                      <option value="10000000">10,000,000</option>
                      <option value="15000000">15,000,000</option>
                      <option value="20000000">20,000,000</option>
                      <option value="30000000">30,000,000</option>
                      <option value="40000000">40,000,000</option>
                      <option value="50000000">50,000,000</option>
                      <option value="60000000">60,000,000</option>
                      <option value="70000000">70,000,000</option>
                      <option value="80000000">80,000,000</option>
                      <option value="90000000">90,000,000</option>
                      <option value="90000000+">99,000,000</option>
                      <option value="">No Min</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Max Price (in £)</label>
                    <select class="form-control">
                      <option>No Max</option>
                      <option value="5000">5,000</option>
                      <option value="10000">10,000</option>
                      <option value="15000">15,000</option>
                      <option value="25000">25,000</option>
                      <option value="50000">50,000</option>
                      <option value="60000">60,000</option>
                      <option value="70000">70,000</option>
                      <option value="80000">80,000</option>
                      <option value="90000">90,000</option>
                      <option value="100000">100,000</option>
                      <option value="110000">110,000</option>
                      <option value="120000">120,000</option>
                      <option value="125000">125,000</option>
                      <option value="130000">130,000</option>
                      <option value="140000">140,000</option>
                      <option value="150000">150,000</option>
                      <option value="160000">160,000</option>
                      <option value="170000">170,000</option>
                      <option value="175000">175,000</option>
                      <option value="180000">180,000</option>
                      <option value="190000">190,000</option>
                      <option value="200000">200,000</option>
                      <option value="210000">210,000</option>
                      <option value="220000">220,000</option>
                      <option value="230000">230,000</option>
                      <option value="240000">240,000</option>
                      <option value="250000">250,000</option>
                      <option value="260000">260,000</option>
                      <option value="270000">270,000</option>
                      <option value="280000">280,000</option>
                      <option value="290000">290,000</option>
                      <option value="300000">300,000</option>
                      <option value="325000">325,000</option>
                      <option value="350000">350,000</option>
                      <option value="375000">375,000</option>
                      <option value="400000">400,000</option>
                      <option value="425000">425,000</option>
                      <option value="450000">450,000</option>
                      <option value="475000">475,000</option>
                      <option value="500000">500,000</option>
                      <option value="550000">550,000</option>
                      <option value="600000">600,000</option>
                      <option value="650000">650,000</option>
                      <option value="700000">700,000</option>
                      <option value="800000">800,000</option>
                      <option value="900000">900,000</option>
                      <option value="1000000">1,000,000</option>
                      <option value="1250000">1,250,000</option>
                      <option value="1500000">1,500,000</option>
                      <option value="1750000">1,750,000</option>
                      <option value="2000000">2,000,000</option>
                      <option value="2500000">2,500,000</option>
                      <option value="3000000">3,000,000</option>
                      <option value="4000000">4,000,000</option>
                      <option value="5000000">5,000,000</option>
                      <option value="7500000">7,500,000</option>
                      <option value="10000000">10,000,000</option>
                      <option value="15000000">15,000,000</option>
                      <option value="20000000">20,000,000</option>
                      <option value="30000000">30,000,000</option>
                      <option value="40000000">40,000,000</option>
                      <option value="50000000">50,000,000</option>
                      <option value="60000000">60,000,000</option>
                      <option value="70000000">70,000,000</option>
                      <option value="80000000">80,000,000</option>
                      <option value="90000000">90,000,000</option>
                      <option value="90000000+">99,000,000</option>
                      <option value="">No Max</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Area</label>
                    <select class="form-control">
                      <option>Any</option>
                      <option>Within 1 Mile</option>
                      <option>Within 2 Miles</option>
                      <option>Within 5 Miles</option>
                      <option>Within 10 Miles</option>
                      <option>Within 15 Miles</option>
                      <option>Within 20 Miles</option>
                      <option>Within 50 Miles</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade in" id="wanted">
              <div class="srchbox">
                <div class="input-group">
                  <input type="text" class="form-control label_in" id="comm_search" placeholder="e.g House wanted in New York or Listing ID">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
                <div class="row srcsubfld">
                  <div class="col-md-3">
                    <label>Property type</label>
                    <select name="" id="" class="form-control">
                      <option value="" selected="selected">Any</option>
                      <option value="3">Houses</option>
                      <option value="3">Flats / Apartments</option>
                      <option value="3">Bungalows</option>
                      <option value="3">Land</option>
                      <option value="3">Barn Conversion</option>
                      <option value="3">Boats / Houseboat</option>
                      <option value="3">Character Property</option>
                      <option value="3">Contemporary</option>
                      <option value="3">Cottage</option>
                      <option value="3">Equestrian Property </option>
                      <option value="3">Farms</option>
                      <option value="3">Farmhouse</option>
                      <option value="3">Houseboat / Boats</option>
                      <option value="3">Investment </option>
                      <option value="3">Lodge</option>
                      <option value="3">Maisonette</option>
                      <option value="3">Mobile / Park Home</option>
                      <option value="3">Mews House</option>
                      <option value="9">Retirement</option>
                      <option value="3">Non-Retirement</option>
                      <option value="3">Room Only</option>
                      <option value="3">Penthouse</option>
                      <option value="3">Plot Files</option>
                      <option value="3">Retirement</option>
                      <option value="3">Students</option>
                      <option value="3">Swapping</option>
                      <option value="3">Villa</option>
                      <option value="3">Waterside</option>
                      <option value="3">Others</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Bedrooms</label>
                    <select class="form-control">
                      <option>Any</option>
                      <option>Studio</option>
                      <option>1+</option>
                      <option>2+</option>
                      <option>3+</option>
                      <option>4+</option>
                      <option>5+</option>
                      <option>6+</option>
                      <option>7+</option>
                      <option>8+</option>
                      <option>9+</option>
                      <option>10+</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Min Price (in £)</label>
                    <select class="form-control">
                      <option>No Min</option>
                      <option value="5000">5,000</option>
                      <option value="10000">10,000</option>
                      <option value="15000">15,000</option>
                      <option value="25000">25,000</option>
                      <option value="50000">50,000</option>
                      <option value="60000">60,000</option>
                      <option value="70000">70,000</option>
                      <option value="80000">80,000</option>
                      <option value="90000">90,000</option>
                      <option value="100000">100,000</option>
                      <option value="110000">110,000</option>
                      <option value="120000">120,000</option>
                      <option value="125000">125,000</option>
                      <option value="130000">130,000</option>
                      <option value="140000">140,000</option>
                      <option value="150000">150,000</option>
                      <option value="160000">160,000</option>
                      <option value="170000">170,000</option>
                      <option value="175000">175,000</option>
                      <option value="180000">180,000</option>
                      <option value="190000">190,000</option>
                      <option value="200000">200,000</option>
                      <option value="210000">210,000</option>
                      <option value="220000">220,000</option>
                      <option value="230000">230,000</option>
                      <option value="240000">240,000</option>
                      <option value="250000">250,000</option>
                      <option value="260000">260,000</option>
                      <option value="270000">270,000</option>
                      <option value="280000">280,000</option>
                      <option value="290000">290,000</option>
                      <option value="300000">300,000</option>
                      <option value="325000">325,000</option>
                      <option value="350000">350,000</option>
                      <option value="375000">375,000</option>
                      <option value="400000">400,000</option>
                      <option value="425000">425,000</option>
                      <option value="450000">450,000</option>
                      <option value="475000">475,000</option>
                      <option value="500000">500,000</option>
                      <option value="550000">550,000</option>
                      <option value="600000">600,000</option>
                      <option value="650000">650,000</option>
                      <option value="700000">700,000</option>
                      <option value="800000">800,000</option>
                      <option value="900000">900,000</option>
                      <option value="1000000">1,000,000</option>
                      <option value="1250000">1,250,000</option>
                      <option value="1500000">1,500,000</option>
                      <option value="1750000">1,750,000</option>
                      <option value="2000000">2,000,000</option>
                      <option value="2500000">2,500,000</option>
                      <option value="3000000">3,000,000</option>
                      <option value="4000000">4,000,000</option>
                      <option value="5000000">5,000,000</option>
                      <option value="7500000">7,500,000</option>
                      <option value="10000000">10,000,000</option>
                      <option value="15000000">15,000,000</option>
                      <option value="20000000">20,000,000</option>
                      <option value="30000000">30,000,000</option>
                      <option value="40000000">40,000,000</option>
                      <option value="50000000">50,000,000</option>
                      <option value="60000000">60,000,000</option>
                      <option value="70000000">70,000,000</option>
                      <option value="80000000">80,000,000</option>
                      <option value="90000000">90,000,000</option>
                      <option value="90000000+">99,000,000</option>
                      <option value="">No Min</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Max Price (in £)</label>
                    <select class="form-control">
                      <option>No Max</option>
                      <option value="5000">5,000</option>
                      <option value="10000">10,000</option>
                      <option value="15000">15,000</option>
                      <option value="25000">25,000</option>
                      <option value="50000">50,000</option>
                      <option value="60000">60,000</option>
                      <option value="70000">70,000</option>
                      <option value="80000">80,000</option>
                      <option value="90000">90,000</option>
                      <option value="100000">100,000</option>
                      <option value="110000">110,000</option>
                      <option value="120000">120,000</option>
                      <option value="125000">125,000</option>
                      <option value="130000">130,000</option>
                      <option value="140000">140,000</option>
                      <option value="150000">150,000</option>
                      <option value="160000">160,000</option>
                      <option value="170000">170,000</option>
                      <option value="175000">175,000</option>
                      <option value="180000">180,000</option>
                      <option value="190000">190,000</option>
                      <option value="200000">200,000</option>
                      <option value="210000">210,000</option>
                      <option value="220000">220,000</option>
                      <option value="230000">230,000</option>
                      <option value="240000">240,000</option>
                      <option value="250000">250,000</option>
                      <option value="260000">260,000</option>
                      <option value="270000">270,000</option>
                      <option value="280000">280,000</option>
                      <option value="290000">290,000</option>
                      <option value="300000">300,000</option>
                      <option value="325000">325,000</option>
                      <option value="350000">350,000</option>
                      <option value="375000">375,000</option>
                      <option value="400000">400,000</option>
                      <option value="425000">425,000</option>
                      <option value="450000">450,000</option>
                      <option value="475000">475,000</option>
                      <option value="500000">500,000</option>
                      <option value="550000">550,000</option>
                      <option value="600000">600,000</option>
                      <option value="650000">650,000</option>
                      <option value="700000">700,000</option>
                      <option value="800000">800,000</option>
                      <option value="900000">900,000</option>
                      <option value="1000000">1,000,000</option>
                      <option value="1250000">1,250,000</option>
                      <option value="1500000">1,500,000</option>
                      <option value="1750000">1,750,000</option>
                      <option value="2000000">2,000,000</option>
                      <option value="2500000">2,500,000</option>
                      <option value="3000000">3,000,000</option>
                      <option value="4000000">4,000,000</option>
                      <option value="5000000">5,000,000</option>
                      <option value="7500000">7,500,000</option>
                      <option value="10000000">10,000,000</option>
                      <option value="15000000">15,000,000</option>
                      <option value="20000000">20,000,000</option>
                      <option value="30000000">30,000,000</option>
                      <option value="40000000">40,000,000</option>
                      <option value="50000000">50,000,000</option>
                      <option value="60000000">60,000,000</option>
                      <option value="70000000">70,000,000</option>
                      <option value="80000000">80,000,000</option>
                      <option value="90000000">90,000,000</option>
                      <option value="90000000+">99,000,000</option>
                      <option value="">No Max</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Area</label>
                    <select class="form-control">
                      <option>Any</option>
                      <option>Within 1 Mile</option>
                      <option>Within 2 Miles</option>
                      <option>Within 5 Miles</option>
                      <option>Within 10 Miles</option>
                      <option>Within 15 Miles</option>
                      <option>Within 20 Miles</option>
                      <option>Within 50 Miles</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade in" id="findagent">
              <div class="srchbox">
                <div class="input-group">
                  <input type="text" class="form-control label_in" id="int_search" placeholder="e.g Property Agent in New York or Agent ID">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
                <div class="row srcsubfld">
                  <div class="col-md-3">
                    <label>Property type</label>
                    <select name="" id="" class="form-control">
                      <option value="" selected="selected">Any</option>
                      <option value="3">Houses</option>
                      <option value="3">Flats / Apartments</option>
                      <option value="3">Bungalows</option>
                      <option value="3">Land</option>
                      <option value="3">Barn Conversion</option>
                      <option value="3">Boats / Houseboat</option>
                      <option value="3">Character Property</option>
                      <option value="3">Contemporary</option>
                      <option value="3">Cottage</option>
                      <option value="3">Equestrian Property </option>
                      <option value="3">Farms</option>
                      <option value="3">Farmhouse</option>
                      <option value="3">Houseboat / Boats</option>
                      <option value="3">Investment </option>
                      <option value="3">Lodge</option>
                      <option value="3">Maisonette</option>
                      <option value="3">Mobile / Park Home</option>
                      <option value="3">Mews House</option>
                      <option value="9">Retirement</option>
                      <option value="3">Non-Retirement</option>
                      <option value="3">Room Only</option>
                      <option value="3">Penthouse</option>
                      <option value="3">Plot Files</option>
                      <option value="3">Retirement</option>
                      <option value="3">Students</option>
                      <option value="3">Swapping</option>
                      <option value="3">Villa</option>
                      <option value="3">Waterside</option>
                      <option value="3">Others</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Bedrooms</label>
                    <select class="form-control">
                      <option>Any</option>
                      <option>Studio</option>
                      <option>1+</option>
                      <option>2+</option>
                      <option>3+</option>
                      <option>4+</option>
                      <option>5+</option>
                      <option>6+</option>
                      <option>7+</option>
                      <option>8+</option>
                      <option>9+</option>
                      <option>10+</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Min Price (in £)</label>
                    <select class="form-control">
                      <option>No Min</option>
                      <option value="5000">5,000</option>
                      <option value="10000">10,000</option>
                      <option value="15000">15,000</option>
                      <option value="25000">25,000</option>
                      <option value="50000">50,000</option>
                      <option value="60000">60,000</option>
                      <option value="70000">70,000</option>
                      <option value="80000">80,000</option>
                      <option value="90000">90,000</option>
                      <option value="100000">100,000</option>
                      <option value="110000">110,000</option>
                      <option value="120000">120,000</option>
                      <option value="125000">125,000</option>
                      <option value="130000">130,000</option>
                      <option value="140000">140,000</option>
                      <option value="150000">150,000</option>
                      <option value="160000">160,000</option>
                      <option value="170000">170,000</option>
                      <option value="175000">175,000</option>
                      <option value="180000">180,000</option>
                      <option value="190000">190,000</option>
                      <option value="200000">200,000</option>
                      <option value="210000">210,000</option>
                      <option value="220000">220,000</option>
                      <option value="230000">230,000</option>
                      <option value="240000">240,000</option>
                      <option value="250000">250,000</option>
                      <option value="260000">260,000</option>
                      <option value="270000">270,000</option>
                      <option value="280000">280,000</option>
                      <option value="290000">290,000</option>
                      <option value="300000">300,000</option>
                      <option value="325000">325,000</option>
                      <option value="350000">350,000</option>
                      <option value="375000">375,000</option>
                      <option value="400000">400,000</option>
                      <option value="425000">425,000</option>
                      <option value="450000">450,000</option>
                      <option value="475000">475,000</option>
                      <option value="500000">500,000</option>
                      <option value="550000">550,000</option>
                      <option value="600000">600,000</option>
                      <option value="650000">650,000</option>
                      <option value="700000">700,000</option>
                      <option value="800000">800,000</option>
                      <option value="900000">900,000</option>
                      <option value="1000000">1,000,000</option>
                      <option value="1250000">1,250,000</option>
                      <option value="1500000">1,500,000</option>
                      <option value="1750000">1,750,000</option>
                      <option value="2000000">2,000,000</option>
                      <option value="2500000">2,500,000</option>
                      <option value="3000000">3,000,000</option>
                      <option value="4000000">4,000,000</option>
                      <option value="5000000">5,000,000</option>
                      <option value="7500000">7,500,000</option>
                      <option value="10000000">10,000,000</option>
                      <option value="15000000">15,000,000</option>
                      <option value="20000000">20,000,000</option>
                      <option value="30000000">30,000,000</option>
                      <option value="40000000">40,000,000</option>
                      <option value="50000000">50,000,000</option>
                      <option value="60000000">60,000,000</option>
                      <option value="70000000">70,000,000</option>
                      <option value="80000000">80,000,000</option>
                      <option value="90000000">90,000,000</option>
                      <option value="90000000+">99,000,000</option>
                      <option value="">No Min</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Max Price (in £)</label>
                    <select class="form-control">
                      <option>No Max</option>
                      <option value="5000">5,000</option>
                      <option value="10000">10,000</option>
                      <option value="15000">15,000</option>
                      <option value="25000">25,000</option>
                      <option value="50000">50,000</option>
                      <option value="60000">60,000</option>
                      <option value="70000">70,000</option>
                      <option value="80000">80,000</option>
                      <option value="90000">90,000</option>
                      <option value="100000">100,000</option>
                      <option value="110000">110,000</option>
                      <option value="120000">120,000</option>
                      <option value="125000">125,000</option>
                      <option value="130000">130,000</option>
                      <option value="140000">140,000</option>
                      <option value="150000">150,000</option>
                      <option value="160000">160,000</option>
                      <option value="170000">170,000</option>
                      <option value="175000">175,000</option>
                      <option value="180000">180,000</option>
                      <option value="190000">190,000</option>
                      <option value="200000">200,000</option>
                      <option value="210000">210,000</option>
                      <option value="220000">220,000</option>
                      <option value="230000">230,000</option>
                      <option value="240000">240,000</option>
                      <option value="250000">250,000</option>
                      <option value="260000">260,000</option>
                      <option value="270000">270,000</option>
                      <option value="280000">280,000</option>
                      <option value="290000">290,000</option>
                      <option value="300000">300,000</option>
                      <option value="325000">325,000</option>
                      <option value="350000">350,000</option>
                      <option value="375000">375,000</option>
                      <option value="400000">400,000</option>
                      <option value="425000">425,000</option>
                      <option value="450000">450,000</option>
                      <option value="475000">475,000</option>
                      <option value="500000">500,000</option>
                      <option value="550000">550,000</option>
                      <option value="600000">600,000</option>
                      <option value="650000">650,000</option>
                      <option value="700000">700,000</option>
                      <option value="800000">800,000</option>
                      <option value="900000">900,000</option>
                      <option value="1000000">1,000,000</option>
                      <option value="1250000">1,250,000</option>
                      <option value="1500000">1,500,000</option>
                      <option value="1750000">1,750,000</option>
                      <option value="2000000">2,000,000</option>
                      <option value="2500000">2,500,000</option>
                      <option value="3000000">3,000,000</option>
                      <option value="4000000">4,000,000</option>
                      <option value="5000000">5,000,000</option>
                      <option value="7500000">7,500,000</option>
                      <option value="10000000">10,000,000</option>
                      <option value="15000000">15,000,000</option>
                      <option value="20000000">20,000,000</option>
                      <option value="30000000">30,000,000</option>
                      <option value="40000000">40,000,000</option>
                      <option value="50000000">50,000,000</option>
                      <option value="60000000">60,000,000</option>
                      <option value="70000000">70,000,000</option>
                      <option value="80000000">80,000,000</option>
                      <option value="90000000">90,000,000</option>
                      <option value="90000000+">99,000,000</option>
                      <option value="">No Max</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Area</label>
                    <select class="form-control">
                      <option>Any</option>
                      <option>Within 1 Mile</option>
                      <option>Within 2 Miles</option>
                      <option>Within 5 Miles</option>
                      <option>Within 10 Miles</option>
                      <option>Within 15 Miles</option>
                      <option>Within 20 Miles</option>
                      <option>Within 50 Miles</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="advnsrch"><a href="advance-search.html" class="advanced"><i class="fa fa-search" aria-hidden="true"></i> Advanced Search</a></div>
        </div>
      </div>
    </div>
  </div>
  <!--/Search Block--> 
  
  <!-- Premium Agencies start -->
  <section class="section">
    <div class="container"> 
      <!-- title start -->
      <div class="titleTop">
        <h3>Premium Agencies</h3>
        <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
      </div>
      <!-- title end -->
      <div class="premiumagwp">
        <ul class="premiumengs owl-carousel">
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/01.jpg') }}"  alt=""></a></li>
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/02.jpg') }}"  alt=""></a></li>
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/03.jpg') }}"  alt=""></a></li>
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/04.jpg') }}"  alt=""></a></li>
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/05.jpg') }}"  alt=""></a></li>
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/06.jpg') }}"  alt=""></a></li>
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/07.jpg') }}"  alt=""></a></li>
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/01.jpg') }}"  alt=""></a></li>
          <li class="item" data-toggle="tooltip" data-placement="bottom" title="Power Color" data-original-title="Power Color"><a href="#" title="Power Color"><img src="{{ URL::asset('property/images/agencies/03.jpg') }}"  alt=""></a></li>
        </ul>
      </div>
    </div>
  </section>
      
  <!-- New Projects start -->	
  <section class="section newprojects">
    <div class="container"> 
      <!-- title start -->
      <div class="titleTop">
        <h3>Discover New Projects</h3>
        <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
      </div>
      <ul class="nprojectslist row">
        <li class="col-lg-3">
          <div class="postimg"> <img src="{{ URL::asset('property/images/projects/01.jpg') }}" alt="Project Title">
            <div class="hot">HOT</div>
          </div>
          <div class="int">
            <h4><a href="#.">Business Tower</a></h4>
            <div class="loc"><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <a href="#." class="readmore">Read More</a> </div>
        </li>
        <li class="col-lg-3">
          <div class="postimg"> <img src="{{ URL::asset('property/images/projects/02.jpg') }}" alt="Project Title">
            <div class="hot">HOT</div>
          </div>
          <div class="int">
            <h4><a href="#.">Business Tower</a></h4>
            <div class="loc"><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <a href="#." class="readmore">Read More</a> </div>
        </li>
        <li class="col-lg-3">
          <div class="postimg"> <img src="{{ URL::asset('property/images/projects/03.jpg') }}" alt="Project Title">
            <div class="hot">HOT</div>
          </div>
          <div class="int">
            <h4><a href="#.">Business Tower</a></h4>
            <div class="loc"><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <a href="#." class="readmore">Read More</a> </div>
        </li>
        <li class="col-lg-3">
          <div class="postimg"> <img src="{{ URL::asset('property/images/projects/04.jpg') }}" alt="Project Title">
            <div class="hot">HOT</div>
          </div>
          <div class="int">
            <h4><a href="#.">Business Tower</a></h4>
            <div class="loc"><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <a href="#." class="readmore">Read More</a> </div>
        </li>
      </ul>
    </div>
  </section>
  
  <!-- Featured Properties start -->
  <section class="section greybg">
    <div class="container"> 
      <!-- title start -->
      <div class="titleTop">
        <h3>Featured Properties</h3>
        <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
      </div>
      <!-- title end -->
      
      <ul class="featuredpt owl-carousel itemgrid">
        @foreach($FeaturedProperties as $property)
        <li class="item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/01.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">{{$property->propertyType->name}} For 
                    @if($property->listing_type == 1)
                    Sale
                    @else
                    Rent
                    @endif
                  </div>
                  <h3>{{$property->street}}, {{$property->area_town_city}}, Pakistan</h3>
                  <div class="price">
                    @if($property->listing_type == 1)
                      {{$property->rent_amount}}
                    @else
                      {{$property->ground_rent}}
                    @endif
                  </div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">{{$property->propertyType->name}} For 
                    @if($property->listing_type == 1)
                    Sale
                    @else
                    Rent
                    @endif</a></div>
                  <div class="address">{{$property->street}}, {{$property->area_town_city}}, Pakistan</div>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="top" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>{{$property->bed}}</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="top" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>{{$property->bath}}</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="top" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>{{$property->parking_no}}</strong> </div>
                    </li>
                    <li>
                    <div class="into" data-toggle="tooltip" data-placement="top" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>{{$property->property_size}}{{$property->Unit->name}}</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="{{route('user.property.show', $property->id)}}" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  
  <!--How it Works-->
  <section class="section whychoose">
    <div class="container">
      <div class="titleTop">
        <h3>How it Works</h3>
        <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
      </div>
      <ul class="row chooselist">
        <li class="col-lg-4 col-sm-6">
          <div class="thumb-icon"><i class="fa fa-building" aria-hidden="true"></i></div>
          <h3>Sign Up</h3>
          <p>Praesent tempus at neque non hendrerit. In euismod vestibulum sodales. Fusce feugiat dapibus facilisis. Sed interdum mauris sed vulputate.</p>
        </li>
        <li class="col-lg-4 col-sm-6">
          <div class="thumb-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
          <h3>Add Your Property</h3>
          <p>Praesent tempus at neque non hendrerit. In euismod vestibulum sodales. Fusce feugiat dapibus facilisis. Sed interdum mauris sed vulputate.</p>
        </li>
        <li class="col-lg-4 col-sm-6">
          <div class="thumb-icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
          <h3>Sold/Rent Out</h3>
          <p>Praesent tempus at neque non hendrerit. In euismod vestibulum sodales. Fusce feugiat dapibus facilisis. Sed interdum mauris sed vulputate.</p>
        </li>
      </ul>
    </div>
  </section>
  
  <!-- Latest Properties start -->
  <section class="section">
    <div class="container"> 
      <!-- title start -->
      <div class="titleTop">
        <h3>Latest Properties</h3>
        <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
      </div>
      <!-- title end -->
      
      <ul class="row itemgrid">
        <li class="col-lg-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/01.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">House For Sale</div>
                  <h3>1350 Michael Lane GA</h3>
                  <div class="price">$699,00</div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">House For Sale</a></div>
                  <div class="address">34 Fort Collins, Colorado 80523, USA</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl nulla...</p>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="top" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="top" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="top" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="top" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="#" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/02.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">House For Sale</div>
                  <h3>1350 Michael Lane GA</h3>
                  <div class="price">$699,00</div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">House For Sale</a></div>
                  <div class="address">34 Fort Collins, Colorado 80523, USA</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl nulla...</p>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="#" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/03.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">House For Rent</div>
                  <h3>1350 Michael Lane GA</h3>
                  <div class="price">$699,00</div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">House For Rent</a></div>
                  <div class="address">34 Fort Collins, Colorado 80523, USA</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl nulla...</p>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="#" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/04.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">House For Rent</div>
                  <h3>1350 Michael Lane GA</h3>
                  <div class="price">$699,00</div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">House For Rent</a></div>
                  <div class="address">34 Fort Collins, Colorado 80523, USA</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl nulla...</p>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="#" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/05.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">Room For Rent</div>
                  <h3>1350 Michael Lane GA</h3>
                  <div class="price">$699,00</div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">House For Sale</a></div>
                  <div class="address">34 Fort Collins, Colorado 80523, USA</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl nulla...</p>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="#" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/06.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">House For Rent</div>
                  <h3>1350 Michael Lane GA</h3>
                  <div class="price">$699,00</div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">House For Rent</a></div>
                  <div class="address">34 Fort Collins, Colorado 80523, USA</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl nulla...</p>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="#" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/07.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">Room For Rent</div>
                  <h3>1350 Michael Lane GA</h3>
                  <div class="price">$699,00</div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">House For Sale</a></div>
                  <div class="address">34 Fort Collins, Colorado 80523, USA</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl nulla...</p>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="#" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front"> <span class="imgbox"><img src="{{ URL::asset('property/images/property/08.jpg') }}" alt="" /></span>
                <div class="frontinfo">
                  <div class="ptype">Room For Rent</div>
                  <h3>1350 Michael Lane GA</h3>
                  <div class="price">$699,00</div>
                </div>
                <div class="imgcounter"><span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span></div>
              </div>
              <div class="back">
                <div class="inner">
                  <div class="back-title"><a href="#">House For Sale</a></div>
                  <div class="address">34 Fort Collins, Colorado 80523, USA</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra nisl nulla...</p>
                  <ul class="options">
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bedrooms" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Bathrooms" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Garage" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
                    </li>
                    <li>
                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="Area" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
                    </li>
                  </ul>
                  <div class="viewdetmt"> <a href="#" class="viewlink">View Detail</a> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="viewallbtn"><a href="#">View All Latest Properties</a></div>
    </div>
  </section>
  
  <!-- Popular Locations start -->
  <section class="section greybg">
    <div class="container"> 
      <!-- title start -->
      <div class="titleTop">
        <h3>Popular Locations</h3>
        <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
      </div>
      <!-- title end -->
      
      <div class="srchbx"> 
        <!--Categories start-->
        <div class="srchint">
          <ul class="row catelist">
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in New York <span>(27,424)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Kennesaw <span>(16,622)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Atlanta <span>(8,841)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Sano Joes <span>(7,408)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Moscow <span>(2,750)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Washington <span>(4,276)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Chicago <span>(768)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Boston <span>(3,904)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Flats to rent in Los Angeles <span>(7,767)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Flats to rent in Philadelphia <span>(1,573)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Flats to rent in New Orleans <span>(2,284)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Flats to rent in Miami <span>(910)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses to rent in Kansas City <span>(9,680)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses to rent in Cincinnati <span>(4,624)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses to rent in San Diego <span>(5,775)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses to rent in San Francisco <span>(2,692)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Sano Joes <span>(7,408)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Moscow <span>(2,750)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Washington <span>(4,276)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Chicago <span>(768)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses for sale in Boston <span>(3,904)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Flats to rent in Los Angeles <span>(7,767)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Flats to rent in Philadelphia <span>(1,573)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Flats to rent in New Orleans <span>(2,284)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Flats to rent in Miami <span>(910)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses to rent in Kansas City <span>(9,680)</span></a> </li>
            <li class="col-lg-4 col-md-6"><a href="#" title="">Houses to rent in Cincinnati <span>(4,624)</span></a> </li>
          </ul>
          <div class="viewallbtn"><a href="#">View All Locations</a></div>
        </div>
      </div>
    </div>
  </section>
  
  <!--About-->
  <section class="section aboutwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="abimage"> <img src="{{ URL::asset('property/images/about-company.jpg') }}" alt="Construction" /> </div>
        </div>
        <div class="col-lg-7">
          <div class="titleTop">
            <div class="subtitle">Welcome to</div>
            <h3>Property Portal</h3>
            <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Property Portal" /></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula malesuada nisi eu rutrum. Maecenas purus diam, lobortis at velit eget, ultricies posuere augue. Nullam nec lectus a augue dictum euismod ut sed ex. Integer pretium arcu neque, vitae mollis massa consequat eu. In eget dolor luctus, varius dui fringilla, lobortis odio. Cras molestie nunc pretium, dictum lorem vel, vulputate mi. Etiam ac ligula bibendum, luctus diam sit amet, rutrum ipsum. <br>
            <br>
            Praesent tempus at neque non hendrerit. In euismod vestibulum sodales. Fusce feugiat dapibus facilisis. Sed interdum mauris sed vulputate fringilla. Sed purus dui, tempus tempor velit vel, feugiat eleifend nulla [...]</p>
          
          <!--<a href="#" class="sitebtn">More About Us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>-->
          
          <ul class="circleList row">
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-cogs" aria-hidden="true"></i></div>
              <div class="title">BUILDING</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </li>
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-desktop" aria-hidden="true"></i></div>
              <div class="title">RENOVATION</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </li>
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-tags" aria-hidden="true"></i></div>
              <div class="title">INTERIOR</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <!--Newsletter Ideas-->
  <section class="newsletter">
    <div class="container">
      <div class="titleTop">
        <div class="subtitle">Newsletter</div>
        <h3>Promos. Deals. New products</h3>
        <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
      </div>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Enter Your Email Address">
        <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Sign Up <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </span> </div>
    </div>
  </section>
  
  <!--Blog-->
  <section id="blog" class="section">
    <div class="container"> 
      <!-- SECTION TITLE -->
      <div class="titleTop">
        <div class="subtitle">Lorem ipsum dolor</div>
        <h3>Latest From Blog</h3>
        <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
      </div>
      <ul class="blogGrid row">
        <li class="col-lg-4">
          <div class="int"> 
            <!-- Blog Image -->
            <div class="postimg"> <img src="{{ URL::asset('property/images/blog/1.jpg') }}" alt="Blog Title"></div>
            <!-- Blog info -->
            <div class="post-header">
              <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
              <h4><a href="#.">Duis ultricies aliquet</a></h4>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
            <a href="#." class="readmore">Read More</a> </div>
        </li>
        <li class="col-lg-4">
          <div class="int"> 
            <!-- Blog Image -->
            <div class="postimg"> <img src="{{ URL::asset('property/images/blog/2.jpg') }}" alt="Blog Title"></div>
            <!-- Blog info -->
            <div class="post-header">
              <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
              <h4><a href="#.">Duis ultricies aliquet</a></h4>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
            <a href="#." class="readmore">Read More</a> </div>
        </li>
        <li class="col-lg-4">
          <div class="int"> 
            <!-- Blog Image -->
            <div class="postimg"> <img src="{{ URL::asset('property/images/blog/3.jpg') }}" alt="Blog Title"></div>
            <!-- Blog info -->
            <div class="post-header">
              <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
              <h4><a href="#.">Duis ultricies aliquet</a></h4>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
            <a href="#." class="readmore">Read More</a> </div>
        </li>
      </ul>
    </div>
  </section>
  
  <!--Video-->
  <div class="videowraper section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/FxiskmF16gU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-md-6"> 
          
          <!-- title start -->
          <div class="titleTop">
            <div class="subtitle">How to Buy</div>
            <h3>Watch Our <span>Video</span></h3>
            <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Property Portal" /></div>
          </div>
          <!-- title end -->
          <p>Our partners make Milestone products more dynamic and integrations push the limits of what is possible. XProtect® software protects animals from known poachers and protects the city of Minneapolis.</p>
        </div>
      </div>
    </div>
  </div>
  
<!--Testimonials-->
<section class="testimonials">
<div class="container">
    <div class="titleTop">
    <div class="subtitle">What Our Clients Saying</div>
    <h3>Our Testimonials</h3>
    <div class="seprate"><img src="{{ URL::asset('property/images/seprator.png') }}" alt="Home Build" /></div>
    </div>
    <ul class="testimonialsList owl-carousel">
    <li class="item">
        <div class="testinner">
        <div class="userimg"><img src="{{ URL::asset('property/images/client-img1.jpg') }}" alt="" /></div>
        <div class="clientname">Adam Stone <span>/ CEO at Google INC</span></div>
        <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup. Sed elit quam, iaculis sed semper sit amet udin</p>
        </div>
    </li>
    <li class="item">
        <div class="testinner">
        <div class="userimg"><img src="{{ URL::asset('property/images/client-img2.jpg') }}" alt="" /></div>
        <div class="clientname">Adam Stone <span>/ CEO at Google INC</span></div>
        <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup. Sed elit quam, iaculis sed semper sit amet udin</p>
        </div>
    </li>
    </ul>
</div>
</section>
  
<!-- Counter Section -->
<section id="counter">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
            <span class="counter-text">For Sale Listings</span> <span class="counter-number" data-from="1" data-to="999" data-speed="1000"></span> </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
            <span class="counter-text">To Rent Listing</span> <span class="counter-number" data-from="1" data-to="1512" data-speed="2000"></span> </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
            <span class="counter-text">Recently Sold</span> <span class="counter-number" data-from="1" data-to="1756" data-speed="3000"></span> </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
            <span class="counter-text">Price Reduced</span> <span class="counter-number" data-from="1" data-to="101" data-speed="4000"></span> </div>
        </div>
      </div>
    </div>
</section>
@endsection