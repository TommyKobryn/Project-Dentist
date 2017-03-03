<?php namespace Atomiccode\Contact\Components;

use Cms\Classes\ComponentBase;
use Atomiccode\Contact\Models\Openhours as Openhour;

class Openhours extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'openhours Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
        $openhour = $this->page['openhours'] = Openhour::orderBy('id', 'asc')->get();
    }
}