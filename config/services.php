<?php

return [

    'facebook' => [
        'client_id' => '324171321438048',
        'client_secret' => 'dcefeaac06f49fbaa6447435e7b05acd',
        'redirect' => 'http://localhost:8000/callback',
    ],

    'google' => [
        'client_id' => '678338393216-34soj2nnffm88olhtmi8iif8vcarev9g.apps.googleusercontent.com',
        'client_secret' => 'Vyvl7CyU9wRkCEBPua_J80nT',
        'redirect' => 'http://localhost:8000/callback',
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
