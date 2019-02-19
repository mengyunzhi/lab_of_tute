<?php namespace Yunzhiclub\Appointment\Models;

use Model;

/**
 * Model
 */
class Appointment extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'yunzhiclub_appointment_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
