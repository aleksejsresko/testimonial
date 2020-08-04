<?php namespace BrandIt\Testimonial;

use Backend;
use System\Classes\PluginBase;

/**
 * Testimonial Plugin Information File
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
            'name'        => 'Testimonial',
            'description' => 'No description provided yet...',
            'author'      => 'BrandIt',
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
            'BrandIt\Testimonial\Components\MyComponent' => 'myComponent',
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
            'brandit.testimonial.some_permission' => [
                'tab' => 'Testimonial',
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
            'testimonial' => [
                'label'       => 'Testimonial',
                'url'         => Backend::url('brandit/testimonial/items'),
                'icon'        => 'icon-pencil',
                'permissions' => ['brandit.testimonials.*'],
                'order'       => 500,
                'sideMenu' => [
                    'testimonial' => [
                    'label'       => 'Testimonial',
                    'url'         => Backend::url('brandit/testimonial/items'),
                    'icon'        => 'icon-pencil',
                    'permissions' => ['brandit.testimonials.*'],
                    'order'       => 500,
                    ],
                    
                    'tags' => [
                        'label'       => 'Tags',
                        'url'         => Backend::url('brandit/testimonial/tags'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['brandit.testimonials.*'],
                        'order'       => 500,
                    ],
                ] 
            ],
            
        ];
    }
}
