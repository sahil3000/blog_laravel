<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */
    // SITE_NAME from env file for that when if site_name is available in config file then goto env file for site_name
    'site_name' => env('SITE_NAME', 'My Blog'),


];
