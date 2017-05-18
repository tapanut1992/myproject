<?php namespace ThreeDSInteractive\MtlESale\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThreedsinteractiveMtlesaleNationality extends Migration
{
    public function up()
    {
        Schema::create('threedsinteractive_mtlesale_nationality', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('title_th', 255);
            $table->string('title_en', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('threedsinteractive_mtlesale_nationality');
    }
}
