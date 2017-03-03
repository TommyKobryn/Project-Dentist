<?php namespace Tomas\Reference;

use Backend;
use System\Classes\PluginBase;

/**
 * reference Plugin Information File
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
            'name'        => 'reference',
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
  //      return []; // Remove this line to activate

        return [
            'Tomas\Reference\Components\Reference' => 'reference',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
  //      return []; // Remove this line to activate

        return [
            'tomas.reference.some_permission' => [
                'tab' => 'reference',
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
    //    return []; // Remove this line to activate

        return [
            'reference' => [
                'label'       => 'reference',
                'url'         => Backend::url('tomas/reference/reference'),
                'icon'        => 'icon-leaf',
                'permissions' => ['tomas.reference.*'],
                'order'       => 500,
            ],
        ];
    }
}
