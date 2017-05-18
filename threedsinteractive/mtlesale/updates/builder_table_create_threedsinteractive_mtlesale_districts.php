<?php namespace ThreeDSInteractive\MtlESale\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThreedsinteractiveMtlesaleDistricts extends Migration
{
    public function up()
    {
        Schema::create('threedsinteractive_mtlesale_districts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title_th', 100);
            $table->string('title_en', 100);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('threedsinteractive_mtlesale_districts');
    }
}
