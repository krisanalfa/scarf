<?php

return [
    'cache' => [
        /*
        |----------------------------------------------------------------------
        | Route Caching Configuration
        |----------------------------------------------------------------------
        |
        | Enable route caching.
        |
        */
        'enabled' => false,

        /*
        |----------------------------------------------------------------------
        | Route Caching File
        |----------------------------------------------------------------------
        |
        | File to store cached route.
        |
         */
        'path' => STORAGE_PATH.'/framework/router/cached.php',
    ],
];
