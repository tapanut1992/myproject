<?php namespace ThreeDSInteractive\MtlESale\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThreedsinteractiveMtlesaleSalutation extends Migration
{
    public function up()
    {
        Schema::create('threedsinteractive_mtlesale_salutation', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('title_th', 50);
            $table->string('title_en', 50);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('threedsinteractive_mtlesale_salutation');
    }
}
