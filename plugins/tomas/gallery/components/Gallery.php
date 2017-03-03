<?php namespace Tomas\Gallery\Components;

use Cms\Classes\ComponentBase;
use Tomas\Gallery\Models\Gallery as Galleries;

class Gallery extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'gallery Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
      $gallery = $this->page['galleries'] = Galleries::orderBy('id', 'asc')->get();
    }
}
