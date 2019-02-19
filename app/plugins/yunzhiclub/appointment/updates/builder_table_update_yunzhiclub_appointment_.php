<?php namespace Yunzhiclub\Appointment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYunzhiclubAppointment extends Migration
{
    public function up()
    {
        Schema::table('yunzhiclub_appointment_', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yunzhiclub_appointment_', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
