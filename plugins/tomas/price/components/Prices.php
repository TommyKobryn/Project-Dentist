<?php namespace Tomas\Price\Components;

use Cms\Classes\ComponentBase;
use Tomas\Price\Models\Prices as Price;

class Prices extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'prices Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $prices = $this->page['prices'] = Price::orderBy('id', 'asc')->get();
    }
}
