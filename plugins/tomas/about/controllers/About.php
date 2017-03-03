<?php namespace Tomas\About\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * About Back-end Controller
 */
class About extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Tomas.About', 'about', 'about');
    }
}
