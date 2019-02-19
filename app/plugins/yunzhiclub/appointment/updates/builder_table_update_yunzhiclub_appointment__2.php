<?php namespace Yunzhiclub\Appointment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYunzhiclubAppointment2 extends Migration
{
    public function up()
    {
        Schema::table('yunzhiclub_appointment_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yunzhiclub_appointment_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
