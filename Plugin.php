<?php namespace Inetis\KdriveAdapter;

use Infomaniak\KDrive\KDriveServiceProvider;
use System\Classes\PluginBase;

/**
 * KdriveAdapter Plugin Information File
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
            'name'        => 'KdriveAdapter',
            'description' => 'Infomaniak kDrive filesystem adapter plugin for OctoberCMS.',
            'author'      => 'Inetis',
            'icon'        => 'icon-leaf'
        ];
    }


    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        \App::register(KDriveServiceProvider::class);
    }
}
