<?php namespace Tomas\Reference\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Reference Back-end Controller
 */
class Reference extends Controller
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

        BackendMenu::setContext('Tomas.Reference', 'reference', 'reference');
    }
}
