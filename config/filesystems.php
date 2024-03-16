<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [
        
        'public_articles' => [
            'driver' => 'local',
            'root' => public_path('articles'), // Specify the root directory for the storage
            'url' => env('APP_URL').'/articles', // Specify the URL for accessing files
            'visibility' => 'public', // Set the default visibility for files
        ],
        'public_articles_manga' => [
            'driver' => 'local',
            'root' => public_path('articles/manga'), // Specify the root directory for the storage
            'url' => env('APP_URL').'/articles/manga', // Specify the URL for accessing files
            'visibility' => 'public', // Set the default visibility for files
        ],
        'public_banner_images' => [
            'driver' => 'local',
            'root' => public_path('banner_images'), // Specify the root directory for the storage
            'url' => env('APP_URL').'/banner_images', // Specify the URL for accessing files
            'visibility' => 'public', // Set the default visibility for files
        ],
        'public_banner_images_manga' => [
            'driver' => 'local',
            'root' => public_path('banner_images/manga_banner_images'), // Specify the root directory for the storage
            'url' => env('APP_URL').'/banner_images/manga_banner_images', // Specify the URL for accessing files
            'visibility' => 'public', // Set the default visibility for files
        ],
        'public_thumbnail' => [
            'driver' => 'local',
            'root' => public_path('thumbnail'), // Specify the root directory for the storage
            'url' => env('APP_URL').'/thumbnail', // Specify the URL for accessing files
            'visibility' => 'public', // Set the default visibility for files
        ],
        'public_thumbnail_manga' => [
            'driver' => 'local',
            'root' => public_path('thumbnail/manga_thumbnail'), // Specify the root directory for the storage
            'url' => env('APP_URL').'/thumbnail/manga_thumbnail', // Specify the URL for accessing files
            'visibility' => 'public', // Set the default visibility for files
        ],
                                        
        
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
