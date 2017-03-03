<?php namespace Tomas\Gallery;

use Backend;
use System\Classes\PluginBase;

/**
 * gallery Plugin Information File
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
            'name'        => 'gallery',
            'description' => 'No description provided yet...',
            'author'      => 'tomas',
            'icon'        => 'icon-camera-retro'
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
            'Tomas\Gallery\Components\Gallery' => 'gallery',
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
            'tomas.gallery.some_permission' => [
                'tab' => 'gallery',
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
            'gallery' => [
                'label'       => 'gallery',
                'url'         => Backend::url('tomas/gallery/gallery'),
                'icon'        => 'icon-camera-retro',
                'permissions' => ['tomas.gallery.*'],
                'order'       => 500,
            ],
        ];
    }
}
