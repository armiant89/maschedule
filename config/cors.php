<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */

    'defaults' => array(
        'supportsCredentials' => false,
        'allowedOrigins' => array('*'),
        'allowedHeaders' => array('*'),
        'allowedMethods' => array('*'),
        'maxAge' => 3600,
        'hosts' => array()
    ),
    'paths' => array(),

];
