<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Where your Blade templates are located.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This determines where Blade stores compiled templates. On Vercel, we
    | must use /tmp because storage/ is read-only.
    |
    */

    'compiled' => env('VIEW_COMPILED_PATH', sys_get_temp_dir()),

];
