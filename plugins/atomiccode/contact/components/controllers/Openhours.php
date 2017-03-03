<?php namespace Atomiccode\Contact\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Openhours Back-end Controller
 */
class Openhours extends Controller
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

        BackendMenu::setContext('Atomiccode.Contact', 'contact', 'openhours');
    }
}