<?php namespace Tomas\About\Components;

use Cms\Classes\ComponentBase;
use Tomas\About\Models\About as Abouts;

class About extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'about Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $about = $this->page['abouts'] = Abouts::orderBy('id', 'asc')->get();
    }
}
