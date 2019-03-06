<?php namespace Yunzhiclub\Appointment\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Yunzhiclub\Appointment\Models\Appointment;

class Index extends ComponentBase
{

    public $lists = [];
    public $page = 1;
    public $isLastPage = false;
    public $isFirstPage = false;
    public $showPage = true;    // 是否显示分页信息

    public function componentDetails()
    {
        return [
            'name' => '列表页',
            'description' => '显示预约信息'
        ];
    }

    public function onRun()
    {
        $this->initPage();
        $this->lists = Appointment::where([])
            ->orderBy('id', 'desc')
            ->simplePaginate($this->property('maxItems'), $this->page);

        // 最后一页
        if (!$this->lists->hasMorePages()) {
            $this->isLastPage = true;
            //  最后一页，同时是第一页
            if ((int)$this->page === 1) {
                $this->showPage = false;
            }
        }

        if ((int)$this->page === 1) {
            $this->isFirstPage = true;
        }
    }

    protected function initPage()
    {
        $this->page = $this->param('page', 1);
    }

    public function defineProperties()
    {
        return [
            'maxItems' => [
                'title' => '每页条数',
                'description' => '每页显示的最大条数',
                'default' => 10,
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => '仅支持数字'
            ]];
    }
}