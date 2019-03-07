<?php namespace yunzhiclub\Schedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYunzhiclubSchedule extends Migration
{
    public function up()
    {
        Schema::table('yunzhiclub_schedule_', function($table)
        {
            $table->string('name')->default('\'\'')->change();
            $table->string('course')->default('\'\'')->change();
            $table->string('time')->default('\'\'')->change();
            $table->string('klasses')->default('\'\'')->change();
            $table->string('lab')->default('\'\'')->change();
        });
    }
    
    public function down()
    {
        Schema::table('yunzhiclub_schedule_', function($table)
        {
            $table->string('name', 191)->default('\'')->change();
            $table->string('course', 191)->default('\'')->change();
            $table->string('time', 191)->default('\'')->change();
            $table->string('klasses', 191)->default('\'')->change();
            $table->string('lab', 191)->default('\'')->change();
        });
    }
}
