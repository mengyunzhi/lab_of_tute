<?php namespace Yunzhiclub\Schedule\Components;

use Cms\Classes\ComponentBase;

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
    }

    public function onSaveSubmit() {
        return [
            'test' => 'hello'
        ];
    }
}