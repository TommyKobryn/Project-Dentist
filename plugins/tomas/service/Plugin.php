<?php namespace Tomas\Service;

use Backend;
use System\Classes\PluginBase;

/**
 * service Plugin Information File
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
            'name'        => 'service',
            'description' => 'No description provided yet...',
            'author'      => 'tomas',
            'icon'        => 'icon-tags'
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
    //    return []; // Remove this line to activate

        return [
            'Tomas\Service\Components\Service' => 'service',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
    //    return []; // Remove this line to activate

        return [
            'tomas.service.some_permission' => [
                'tab' => 'service',
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
            'service' => [
                'label'       => 'Uslugi',
                'url'         => Backend::url('tomas/service/service'),
                'icon'        => 'icon-tags',
                'permissions' => ['tomas.service.*'],
                'order'       => 500,
            ],
        ];
    }
}
