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

    'firebase' => [
        'api_key' => 'AIzaSyCJaKO8d4pkleshE5R2AWPi53eZ0DPGt3M', // Only used for JS integration
        'auth_domain' => 'coincoininsolite-1cf37.firebaseapp.com', // Only used for JS integration
        'database_url' => 'https://coincoininsolite-1cf37.firebaseio.com',
        'storage_bucket' => 'coincoininsolite-1cf37.appspot.com', // Only used for JS integration
    ],

];
