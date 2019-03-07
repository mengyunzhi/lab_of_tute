<?php namespace yunzhiclub\Schedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYunzhiclubSchedule extends Migration
{
    public function up()
    {
        Schema::create('yunzhiclub_schedule_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name')->default('\'\'');
            $table->string('course')->default('\'\'');
            $table->string('time')->default('\'\'');
            $table->string('klasses')->default('\'\'');
            $table->string('lab')->default('\'\'');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yunzhiclub_schedule_');
    }
}
