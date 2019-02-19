<?php namespace Yunzhiclub\Appointment\Components;

use Cms\Classes\ComponentBase;
use Yunzhiclub\Appointment\Models\Appointment;

class AddForm extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => '预约',
			'description' => '新增预约'
		];
	}

	public function onRun() {
	
	}

	public function onSave() {

	}
}