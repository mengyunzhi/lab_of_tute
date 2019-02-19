<?php namespace Yunzhiclub\Appointment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYunzhiclubAppointment extends Migration
{
    public function up()
    {
        Schema::create('yunzhiclub_appointment_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('datetime');
            $table->boolean('confirmed')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yunzhiclub_appointment_');
    }
}
