<?php namespace Yunzhiclub\Appointment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYunzhiclubAppointment3 extends Migration
{
    public function up()
    {
        Schema::table('yunzhiclub_appointment_', function($table)
        {
            $table->string('email');
            $table->string('phone');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::table('yunzhiclub_appointment_', function($table)
        {
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('name');
        });
    }
}
