<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'User\PagesController@userIndex')->name('/');
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {

    //Route for user registration
    Route::get('register', 'User\RegisterController@registerForm')->name('user_register_form');
    Route::post('register', 'User\RegisterController@registerUser')->name('user_register');
    //Route for user login
    Route::get('/preLogin', 'User\LoginController@preLogin')->name('user_pre_login');
    Route::get('/login', 'User\LoginController@showLoginForm')->name('user_login');
    Route::post('/login', 'User\LoginController@login')->name('user_login.submit');
    Route::get('/dashboard', 'User\AuthController@userDashboard')->name('user_dashboard');
    Route::get('agent/dashboard', 'User\AuthController@agentDashboard')->name('agent_dashboard');
    // Route for user Profile
    Route::get('user/profile/{id}', 'User\AuthController@userProfile')->name('user_profile');
    Route::get('user/profile/view/{id}', 'User\AuthController@userProfileView')->name('user_profile_view');
    Route::post('user/profile/{id}', 'User\AuthController@userProfileUpdate')->name('user_profile.update');
    // Route for agent Profile
    Route::get('agent/profile/{id}', 'User\AuthController@agentProfile')->name('agent_profile');
    Route::get('agent/profile/view/{id}', 'User\AuthController@agentProfileView')->name('agent_profile_view');
    Route::post('agent/profile/{id}', 'User\AuthController@agentProfileUpdate')->name('agent_profile.update');

    Route::get('/logout', 'User\LoginController@logout')->name('user_logout');
    // Route for static pages
    Route::get('/contactUs', 'User\PagesController@contactUs')->name('contact_us');
    Route::get('/aboutUs', 'User\PagesController@aboutUs')->name('about_us');
    //Route for Agent property
    Route::get('property/agent/expireproperty/{id}', 'User\PropertyController@expireAgentProperty')->name('expireagent.property');
    Route::get('property/agent/myproperty/{id}', 'User\PropertyController@myAgentProperty')->name('myagent.property');
    Route::get('property/agent/saved', 'User\PropertyController@savedAgentProperty')->name('propertyagent.saved');
    //Route for User property
    Route::get('property/expireproperty/{id}', 'User\PropertyController@expireProperty')->name('expire.property');
    Route::get('property/myproperty/{id}', 'User\PropertyController@myProperty')->name('my.property');
    Route::get('property/rent', 'User\PropertyController@rentProperty')->name('property.rent');
    Route::get('property/sale', 'User\PropertyController@saleProperty')->name('property.sale');
    Route::get('property/saved', 'User\PropertyController@savedProperty')->name('property.saved');
    Route::post('property/saved', 'User\PropertyController@savedPropertyStore')->name('property.saved.store');
    Route::resource('property', 'User\PropertyController');
    //Route for agent
    Route::get('agent/listing', 'User\AgentController@viewListing')->name('agent_listing');
    Route::get('agent/listing/detail/{id}', 'User\AgentController@listingDetail')->name('agent_listing_detail');

});
