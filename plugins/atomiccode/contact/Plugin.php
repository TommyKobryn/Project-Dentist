<?php namespace Atomiccode\Contact;

use Backend;
use System\Classes\PluginBase;

/**
 * contact Plugin Information File
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
            'name'        => 'Kontakt',
            'description' => 'Plugin zarządzania zawartością podstrony Kontakt witryny typu Platinum',
            'author'      => 'AtomicCode',
            'icon'        => 'icon-envelope-o',
            'homepage'    => 'http://atomiccode.pl'
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
        //return []; // Remove this line to activate

        return [
            'Atomiccode\Contact\Components\Contact' => 'contact',
            'Atomiccode\Contact\Components\Openhours' => 'openhours',
            'Atomiccode\Contact\Components\Form' => 'form',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        //return []; // Remove this line to activate

        return [
            'atomiccode.contact.some_permission' => [
                'tab' => 'Kontakt',
                'label' => 'Zarządzaj podstroną Kontaktu'
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
            'contact' => [
                'label'       => 'Kontakt',
                'url'         => Backend::url('atomiccode/contact/contact/update/1'),
                'icon'        => 'icon-envelope-o',
                'permissions' => ['atomiccode.contact.*'],
                'order'       => 700,
                'sideMenu'    => [
                    'contact' => [
                        'label'       => 'Kontakt',
                        'url'         => Backend::url('atomiccode/contact/contact/update/1'),
                        'icon'        => 'icon-envelope-o',
                        'permissions' => ['atomiccode.contact.*'],
                        'order'       => 10,
                    ],
                    'openhours' => [
                        'label'       => 'Godziny Otwarcia',
                        'url'         => Backend::url('atomiccode/contact/openhours/update/1'),
                        'icon'        => 'icon-clock-o',
                        'permissions' => ['atomiccode.contact.*'],
                        'order'       => 20,
                    ],
                ]
            ],
        ];
    }
}
