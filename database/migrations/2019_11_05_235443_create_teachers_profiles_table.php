<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_profiles', function (Blueprint $table) {
            $table->increments('id');            

            $table->integer('usersid')->unique();
            $table->foreign('usersid')->references('id')->on('users');

            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');

            $table->string('gender', 6);            
            // $table->string('name', 50)->nullable()->change();

            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->integer('countryid');
            $table->string('contactno')->nullable();
            $table->string('avatar')->nullable();
            
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
        Schema::dropIfExists('teachers_profiles');
    }
}
