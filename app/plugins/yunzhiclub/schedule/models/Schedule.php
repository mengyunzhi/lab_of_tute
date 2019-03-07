<?php namespace yunzhiclub\Schedule\Models;

use Model;

/**
 * Model
 */
class Schedule extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yunzhiclub_schedule_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
