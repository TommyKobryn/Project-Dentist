<?php namespace Tomas\Service\Components;

use Cms\Classes\ComponentBase;
use Tomas\Service\Models\Service as Services;

class Service extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'service Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
      $service = $this->page['services'] = Services::orderBy('id', 'asc')->get();
    }
}
