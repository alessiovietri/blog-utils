<?php namespace Al3xTig3r\BlogUtils\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Proposals Back-end Controller
 */
class Proposals extends Controller
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

        BackendMenu::setContext('Al3xTig3r.BlogUtils', 'blogutils', 'proposals');
    }
}
