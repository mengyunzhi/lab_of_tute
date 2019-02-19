<?php
namespace Yunzhiclub\Nav\Components;

use Cms\Classes\ComponentBase;

class Index extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => '导航',
			'description' => '动态显示页面导航信息'
		];
	}

}