<?php namespace Tomas\About;

use Backend;
use System\Classes\PluginBase;

/**
 * about Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'about',
            'description' => 'No description provided yet...',
            'author'      => 'tomas',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
      //  return []; // Remove this line to activate

        return [
            'Tomas\About\Components\About' => 'about',
            'Tomas\About\Components\Testimonial' => 'testimonial'

        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
      //  return []; // Remove this line to activate

        return [
            'tomas.about.some_permission' => [
                'tab' => 'about',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        //return []; // Remove this line to activate

        return [
            'about' => [
                'label'       => 'o mnie',
                'url'         => Backend::url('tomas/about/about/update/1'),
                'icon'        => 'icon-magnet',
                'permissions' => ['tomas.about.*'],
                'order'       => 500,
                'sideMenu'    => [
                  'about' => [
                      'label'       => 'o mnie',
                      'url'         => Backend::url('tomas/about/about/update/1'),
                      'icon'        => 'icon-magnet',
                      'permissions' => ['tomas.about.*'],
                      'order'       => 500,
                    ],
                  'testimonial' => [
                      'label'       => 'opinie',
                      'url'         => Backend::url('tomas/about/testimonial'),
                      'icon'        => 'icon-leaf',
                      'permissions' => ['tomas.about.*'],
                      'order'       => 500,
                    ]
                ]

            ]
        ];
    }
}
