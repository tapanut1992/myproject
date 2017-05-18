<?php namespace ThreeDSInteractive\MtlESale\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThreedsinteractiveMtlesaleSalutation extends Migration
{
    public function up()
    {
        Schema::table('threedsinteractive_mtlesale_salutation', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('threedsinteractive_mtlesale_salutation', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
