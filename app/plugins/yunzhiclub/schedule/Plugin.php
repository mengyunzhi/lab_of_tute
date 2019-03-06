<?php namespace yunzhiclub\Schedule;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Yunzhiclub\Schedule\Components\Index' => 'scheduleIndex'
        ];
    }

    public function registerSettings()
    {
    }
}
