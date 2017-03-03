<?php namespace Tomas\Gallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Gallery Back-end Controller
 */
class Gallery extends Controller
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

        BackendMenu::setContext('Tomas.Gallery', 'gallery', 'gallery');
    }
}
