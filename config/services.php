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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '884927783693-4ghm2cm0nrge9tjhqkoc91fv3manl3f9.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://grandprixphoto.ma/backoffice/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '7194283057356716',
        'client_secret' => '80df14e185ea8ff82029ef8730b23ac2',
        'redirect' => 'https://grandprixphoto.ma/backoffice/auth/facebook/callback',
    ],
];
