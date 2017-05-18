<?php namespace ThreeDSInteractive\MtlESale\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThreedsinteractiveMtlesaleJobs extends Migration
{
    public function up()
    {
        Schema::table('threedsinteractive_mtlesale_jobs', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('threedsinteractive_mtlesale_jobs', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
