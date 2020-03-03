# Dropbox Adapter Plugin

Infomaniak [kDrive](https://github.com/Infomaniak/laravel-kdrive) filesystem adapter plugin for OctoberCMS.

## Configuration

Add new filesystem disk in `disks` array in `config/filesystems.php`:

```
'kdrive' => [
        'driver' => 'kdrive',
        'id' => ******,
        'username' => ******,
        'password' => ******,
        'prefix' => ******,
    ]
```

The `KDRIVE_PREFIX` is optional. This settings allows you to define another folder as your root.

## Credentials
To be able to connect to your kDrive, you'll need the following information.

1. Your kDrive ID
2. Your login email address (the one you'd use on https://manager.infomaniak.com)
3. A unique application password ([Generate an application password](https://manager.infomaniak.com/v3/profile/application-password))

## Support

Please use [GitHub Issues Page](https://github.com/mplodowski/dropboxadapter-plugin/issues) to report any issues with plugin.


## Author
inetis is a webdesign agency in Vufflens-la-Ville, Switzerland. We love coding and creating powerful apps and sites  [see our website](https://inetis.ch).


