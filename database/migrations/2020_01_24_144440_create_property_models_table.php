<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('featured_property')->nullable();
            $table->string('listing_mode')->nullable();
            $table->string('listing_type')->nullable();
            $table->integer('property_type_id')->nullable();

            $table->string('rent_period')->nullable();
            $table->integer('rent_maount')->nullable();
            
            $table->string('country')->nullable();
            $table->string('post_code')->nullable();
            $table->string('property_no')->nullable();
            $table->string('street')->nullable();
            $table->string('area_town_city')->nullable();
            $table->string('property_description')->nullable();
            $table->string('location_description')->nullable();

            $table->string('bed')->nullable();
            $table->string('bath')->nullable();
            $table->string('reception')->nullable();
            $table->string('floor')->nullable();
            $table->string('tax')->nullable();
            $table->string('duty')->nullable();
            $table->string('service_charges')->nullable();
            $table->string('ground_rent')->nullable();
            $table->string('property_size')->nullable();
            $table->string('unit')->nullable();
            $table->date('lease_expiry_date')->nullable();
            $table->string('epc_rating')->nullable();
            $table->string('local_autority')->nullable();
            $table->string('parking_no')->nullable();
            $table->string('outside_space')->nullable();

            $table->string('water_bill')->nullable();
            $table->string('bill')->nullable();
            $table->string('wooden_floor')->nullable();
            $table->string('garden')->nullable();
            $table->string('parking')->nullable();
            $table->string('furnished')->nullable();
            $table->string('fire_place')->nullable();
            $table->string('terrace')->nullable();
            $table->string('balcony')->nullable();
            $table->string('basement')->nullable();
            $table->string('dds')->nullable();
            $table->string('pet')->nullable();
            $table->string('swimming_pool')->nullable();
            $table->string('central_heated')->nullable();
            $table->string('wifi')->nullable();
            $table->string('images')->nullable();

            $table->date('expire_at')->nullable();
            $table->string('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_models');
    }
}
