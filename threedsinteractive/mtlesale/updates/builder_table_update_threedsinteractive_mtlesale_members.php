<?php namespace ThreeDSInteractive\MtlESale\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThreedsinteractiveMtlesaleMembers extends Migration
{
    public function up()
    {
        Schema::table('threedsinteractive_mtlesale_members', function($table)
        {
            $table->string('addr_phone_home', 10)->nullable();
            $table->string('addr_mobile_home', 10)->nullable();
            $table->boolean('select_addr_cur')->nullable();
            $table->string('addr_building_cur', 100)->nullable();
            $table->string('addr_no_cur', 100)->nullable();
            $table->string('addr_moo_cur', 100)->nullable();
            $table->string('addr_soi_cur', 100)->nullable();
            $table->integer('addr_province_cur')->nullable();
            $table->integer('addr_district_cur')->nullable();
            $table->integer('addr_subdistrict_cur')->nullable();
            $table->string('addr_zipcode_cur', 5)->nullable();
            $table->string('addr_phone_cur', 10)->nullable();
            $table->string('addr_mobile_cur', 10)->nullable();
            $table->boolean('select_addr_job')->nullable();
            $table->string('addr_building_job', 100)->nullable();
            $table->string('addr_no_job', 100)->nullable();
            $table->string('addr_moo_job', 100)->nullable();
            $table->string('addr_soi_job', 100)->nullable();
            $table->integer('addr_province_job')->nullable();
            $table->integer('addr_district_job')->nullable();
            $table->integer('addr_subdistrict_job')->nullable();
            $table->string('addr_zipcode_job', 5)->nullable();
            $table->string('addr_phone_job', 10)->nullable();
            $table->string('addr_mobile_job', 10)->nullable();
            $table->boolean('select_addr_doc')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('addr_zipcode_home', 5)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('threedsinteractive_mtlesale_members', function($table)
        {
            $table->dropColumn('addr_phone_home');
            $table->dropColumn('addr_mobile_home');
            $table->dropColumn('select_addr_cur');
            $table->dropColumn('addr_building_cur');
            $table->dropColumn('addr_no_cur');
            $table->dropColumn('addr_moo_cur');
            $table->dropColumn('addr_soi_cur');
            $table->dropColumn('addr_province_cur');
            $table->dropColumn('addr_district_cur');
            $table->dropColumn('addr_subdistrict_cur');
            $table->dropColumn('addr_zipcode_cur');
            $table->dropColumn('addr_phone_cur');
            $table->dropColumn('addr_mobile_cur');
            $table->dropColumn('select_addr_job');
            $table->dropColumn('addr_building_job');
            $table->dropColumn('addr_no_job');
            $table->dropColumn('addr_moo_job');
            $table->dropColumn('addr_soi_job');
            $table->dropColumn('addr_province_job');
            $table->dropColumn('addr_district_job');
            $table->dropColumn('addr_subdistrict_job');
            $table->dropColumn('addr_zipcode_job');
            $table->dropColumn('addr_phone_job');
            $table->dropColumn('addr_mobile_job');
            $table->dropColumn('select_addr_doc');
            $table->dropColumn('last_login');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->integer('addr_zipcode_home')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
