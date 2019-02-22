<?php namespace Yunzhiclub\Appointment;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Yunzhiclub\Appointment\Components\AddForm' => 'add',
    		'Yunzhiclub\Appointment\Components\Index' => 'index'
    	];
    }

    public function registerSettings()
    {
    }

     /** 注册MARKUP tags */
    public function registerMarkupTags()
    {
      	return [
            'functions' => [
            ]
        ];
    }

}
