<?php namespace Yunzhiclub\Appointment\Components;

use Cms\Classes\ComponentBase;
use Yunzhiclub\Appointment\Models\Appointment;

class Index extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => '列表页',
			'description' => '显示预约信息'
		];
	}

	public function onRun() {

	}

}