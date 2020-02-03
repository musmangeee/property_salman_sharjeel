<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('user_type')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('register_as')->nullable();
            $table->string('agent_type')->nullable();
            $table->string('b_type')->nullable();
            $table->string('b_contact_no')->nullable();
            $table->string('b_name')->nullable();
            $table->string('b_address1')->nullable();
            $table->string('b_address2')->nullable();
            $table->string('b_address3')->nullable();
            $table->string('b_post_code')->nullable();
            $table->string('b_country')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
