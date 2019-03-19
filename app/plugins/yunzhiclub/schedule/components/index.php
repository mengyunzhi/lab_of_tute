<?php namespace Yunzhiclub\Schedule\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use yunzhiclub\Schedule\Models\Schedule;

class Index extends ComponentBase
{

    /**
     * Returns information about this component, including name and description.
     */
    public function componentDetails()
    {
        return [
            'name' => '课表管理',
            'description' => '显示课表，新增课表等功能'
        ];
    }

    public function onRun() {
        $this->addJs([
            'assets/js/index.min.js'
        ]);
        $this->addCss('assets/css/style.css');
    }

    public function onSaveSubmit() {
        $schedule = new Schedule();
        $schedule->name = Input::get("name");
        $schedule->time = Input::get("time");
        $schedule->course = Input::get("course");
        $schedule->klasses = Input::get("klasses");
        $schedule->lab = Input::get("lab");
        $schedule->save();
        return [];
    }
}