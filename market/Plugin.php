<?php

namespace Crazy\Market;

use Backend;
use System\Classes\PluginBase;

/**
 * market Plugin Information File
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
            'name'        => 'market',
            'description' => 'No description provided yet...',
            'author'      => 'Crazy',
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
            'Crazy\Market\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        // return []; // Remove this line to activate

        return [
            'crazy.market.some_permission' => [
                'tab' => 'market',
                'label' => 'Some permission'
            ],
            'crazy.market.brands.view' => [
                'tab' => 'Crazy.Market',
                'label' => 'Brands - view'
            ],
            'crazy.market.brands.manage' => [
                'tab' => 'Crazy.Market',
                'label' => 'Brands - manage'
            ],
            'crazy.market.brands.reorder' => [
                'tab' => 'Crazy.Market',
                'label' => 'Brands - reorder'
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
        // return []; // Remove this line to activate

        return [
            'market' => [
                'label'       => 'market',
                'url'         => Backend::url('crazy/market/'),
                'icon'        => 'icon-dropbox',
                'permissions' => ['crazy.market.*'],
                // 'order'       => 500,
                'counter' => [Models\Product::class, 'getNotActiveCounts'],
                'sideMenu'    => [
                    'products'  => [
                        'label'         => 'product',
                        'url'           => Backend::url('crazy/market/products'),
                        'icon'          => 'icon-book',
                        'permissions'   => ['crazy/market/products.*'],
                        'counter' => [Models\Product::class, 'getNotActiveCounts'],
                    ],
                    'brands'  => [
                        'label'         => 'brand',
                        'url'           => Backend::url('crazy/market/brands'),
                        'icon'          => 'icon-star-o',
                        'permissions'   => ['crazy/market/brands.*'],
                    ],
                    'categories'  => [
                        'label'         => 'categories',
                        'url'           => Backend::url('crazy/market/categories'),
                        'icon'          => ' icon-sitemap',
                        'permissions'   => ['crazy/market/categories.*'],
                    ]
                ]
            ],
        ];
    }
}
