<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' =>'171273774098947',
        'client_secret' =>'58fc32e6358b83a4831b4a58785db9da',
        'redirect' => 'http://127.0.0.1:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' =>'47361764207-qmgc58ls32iqosbba2ojeg3aemvqcq2q.apps.googleusercontent.com',
        'client_secret' =>'LA3KiU-GCMCWsZEX1obfzpxu',
        'redirect' => 'http://127.0.0.1:8000/login/google/callback',
    ],

];
