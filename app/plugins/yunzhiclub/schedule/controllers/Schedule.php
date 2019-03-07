<?php namespace yunzhiclub\Schedule\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Schedule extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('yunzhiclub.Schedule', 'main-menu-item');
    }
}
