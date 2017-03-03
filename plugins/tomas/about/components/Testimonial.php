<?php namespace Tomas\About\Components;

use Cms\Classes\ComponentBase;
use Tomas\About\Models\Testimonial as Testimonials;

class Testimonial extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'testimonial Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $testimonial = $this->page['testimonials'] = Testimonials::orderBy('id', 'asc')->get();
    }

}
