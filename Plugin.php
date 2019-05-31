<?php namespace Al3xTig3r\BlogUtils;

use Backend;
use System\Classes\PluginBase;

use Lang;

/**
 * BlogUtils Plugin Information File
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
            'name'        => Lang::get('al3xtig3r.blogutils::lang.name'),
            'description' => Lang::get('al3xtig3r.blogutils::lang.description'),
            'author'      => 'Al3xTig3r',
            'icon'        => 'icon-edit'
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
        return [
            'Al3xTig3r\BlogUtils\Components\LastPost' => 'lastPost',
            'Al3xTig3r\BlogUtils\Components\PrevAndNextPosts' => 'prevAndNextPosts',
            'Al3xTig3r\BlogUtils\Components\Proposals' => 'proposals'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'blogutils' => [
                'label'       => Lang::get('al3xtig3r.blogutils::lang.components.proposals.name'),
                'url'         => Backend::url('al3xtig3r/blogutils/proposals'),
                'icon'        => 'icon-edit',
                'permissions' => ['al3xtig3r.blogutils.*'],
                'order'       => 500,
            ],
        ];
    }
}
