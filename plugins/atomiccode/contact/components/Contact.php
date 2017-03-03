<?php namespace Atomiccode\Contact\Components;

use Cms\Classes\ComponentBase;
use Atomiccode\Contact\Models\Contact as Contacts;

class Contact extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'contact Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
        $contacts = $this->page['contacts'] = Contacts::orderBy('id', 'asc')->get();
    }
}
