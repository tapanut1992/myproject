<?php namespace ThreeDSInteractive\MtlESale\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThreedsinteractiveMtlesaleJobs extends Migration
{
    public function up()
    {
        Schema::create('threedsinteractive_mtlesale_jobs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title_th', 100);
            $table->string('title_en', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('threedsinteractive_mtlesale_jobs');
    }
}
