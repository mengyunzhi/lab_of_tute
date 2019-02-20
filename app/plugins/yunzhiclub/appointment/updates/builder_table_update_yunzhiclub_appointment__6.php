<?php namespace Yunzhiclub\Appointment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYunzhiclubAppointment6 extends Migration
{
    public function up()
    {
        Schema::table('yunzhiclub_appointment_', function($table)
        {
            $table->text('feedback')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yunzhiclub_appointment_', function($table)
        {
            $table->dropColumn('feedback');
        });
    }
}
