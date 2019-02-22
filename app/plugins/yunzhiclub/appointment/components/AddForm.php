<?php namespace Yunzhiclub\Appointment\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use October\Rain\Exception\ValidationException;
use Yunzhiclub\Appointment\Models\Appointment;

class AddForm extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => '预约',
			'description' => '新增预约'
		];
	}

	public function onRun() {
	    $this->addJs([
            'assets/js/bootstrap-datetimepicker.min.js',
            'assets/js/bootstrap-datetimepicker.zh-CN.js',
            'assets/js/add-form.js']);

	    $this->addCss([
	        'assets/css/bootstrap-datetimepicker.min.css'
        ]);
	}

	public function onSave() {
	    if (empty(Input::get("datetime"))) {
            throw new ValidationException(['datetime' => '您必须选择预约时间!']);
        }
        $appiontment = new Appointment;
        $appiontment->name = Input::get("name");
        $appiontment->email = Input::get("email");
        $appiontment->phone = Input::get("phone");
        $appiontment->datetime = Input::get("datetime");
        $appiontment->room = Input::get('room');
        $appiontment->reason = Input::get("reason");
        $appiontment->save();
	}
}