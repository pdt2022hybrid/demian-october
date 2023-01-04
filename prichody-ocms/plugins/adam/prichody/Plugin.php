<?php namespace Adam\Prichody;

use Backend;
use System\Classes\PluginBase;

/**
 * Prichody Plugin Information File
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
            'name'        => 'Prichody',
            'description' => 'No description provided yet...',
            'author'      => 'Adam',
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
        return []; // Remove this line to activate

        return [
            'Adam\Prichody\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'adam.prichody.some_permission' => [
                'tab' => 'Prichody',
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

        return [
            'prichody' => [
                'label'       => 'Prichody',
                'url'         => Backend::url('adam/prichody/arrivals'),
                'icon'        => 'icon-leaf',
                'permissions' => ['adam.prichody.*'],
                'order'       => 500,
            ],
        ];
    }
}
