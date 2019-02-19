<?php namespace Yunzhiclub\Nav;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	/** 注册组件 */
    public function registerComponents()
    {
    	return [
    		'Yunzhiclub\Nav\Components\Index' => 'navIndex'
    	];
    }

    /** 注册设置 */
    public function registerSettings()
    {
    }

    /** 注册MARKUP tags */
    public function registerMarkupTags()
    {
       return [
       		'functions' => [
       			'strpos' => 'strpos'
       		]
       ];
    }
}
