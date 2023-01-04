<?php namespace Adam\Openlab;

use Backend;
use System\Classes\PluginBase;

/**
 * openlab Plugin Information File
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
            'name'        => 'openlab',
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
            'Adam\Openlab\Components\MyComponent' => 'myComponent',
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
            'adam.openlab.some_permission' => [
                'tab' => 'openlab',
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
            'openlab' => [
                'label'       => 'openlab',
                'url'         => Backend::url('adam/openlab/nodes'),
                'icon'        => 'icon-leaf',
                'permissions' => ['adam.openlab.*'],
                'order'       => 500,
            ],
        ];
    }
}
