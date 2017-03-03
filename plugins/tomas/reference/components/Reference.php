<?php namespace Tomas\Reference\Components;

use Cms\Classes\ComponentBase;
use Tomas\Reference\Models\Reference as References;


class Reference extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'reference Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
      $reference = $this->page['references'] = References::orderBy('id', 'asc')->get();
    }

}
