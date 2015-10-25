<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => Opencasts\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ], 

    'github' => [
        'client_id'     => 'd604149fbaac5ff400c4',
        'client_secret' => 'bf6007d2391b416a6010bc0975de1ead598dd272',
        'redirect'      => 'http://opencasts.com/auth/github', 
    ],

    'twitter' => [
        'client_id'     => 'elg92dXnzyBFoLstBCwfoV2vx',
        'client_secret' => 'sQF0lGS704cUC8Rg62huXpwS0EHJs0pLV3g3YBmzHHb431tjxf',
        'redirect'      => 'http://opencasts.com/auth/twitter', 
    ],

    'facebook' => [
        'client_id'     => '481755195340146',
        'client_secret' => 'd1905eaac9e97dec0972acb1463b8870',
        'redirect'      => 'http://opencasts.com/auth/facebook', 
    ]

];
