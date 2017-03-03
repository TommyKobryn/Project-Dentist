<?php namespace Tomas\Price;

use Backend;
use System\Classes\PluginBase;

/**
 * price Plugin Information File
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
            'name'        => 'price',
            'description' => 'No description provided yet...',
            'author'      => 'tomas',
            'icon'        => 'icon-money'
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
            'Tomas\Price\Components\Prices' => 'prices',
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
            'tomas.price.some_permission' => [
                'tab' => 'price',
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
      //  return []; // Remove this line to activate

        return [
            'price' => [
                'label'       => 'Cennik',
                'url'         => Backend::url('tomas/price/prices'),
                'icon'        => 'icon-money  ',
                'permissions' => ['tomas.price.*'],
                'order'       => 500,
            ],
        ];
    }
}
