<?php namespace Tomas\About\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Testimonial Back-end Controller
 */
class Testimonial extends Controller
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

        BackendMenu::setContext('Tomas.About', 'about', 'testimonial');
    }
}
