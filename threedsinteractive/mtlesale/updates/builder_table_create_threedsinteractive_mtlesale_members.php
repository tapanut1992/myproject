<?php namespace ThreeDSInteractive\MtlESale\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThreedsinteractiveMtlesaleMembers extends Migration
{
    public function up()
    {
        Schema::create('threedsinteractive_mtlesale_members', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('salutation_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('birthdate');
            $table->boolean('gender');
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->integer('nationality_id');
            $table->string('citizen_id', 16)->nullable();
            $table->date('citizen_id_expire')->nullable();
            $table->integer('job_id')->nullable();
            $table->string('job_position', 255)->nullable();
            $table->string('job_place', 255)->nullable();
            $table->string('job_description', 255)->nullable();
            $table->string('mobile', 10)->nullable();
            $table->integer('status_id')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 50)->nullable();
            $table->string('otp', 6)->nullable();
            $table->date('otp_expire')->nullable();
            $table->string('addr_building_home', 100)->nullable();
            $table->string('addr_no_home', 100)->nullable();
            $table->string('addr_moo_home', 100)->nullable();
            $table->string('addr_soi_home', 100)->nullable();
            $table->integer('addr_province_home')->nullable();
            $table->integer('addr_district_home')->nullable();
            $table->integer('addr_subdistrict_home')->nullable();
            $table->integer('addr_zipcode_home')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('threedsinteractive_mtlesale_members');
    }
}
