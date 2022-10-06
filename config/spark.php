<?php

use App\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Spark Path
    |--------------------------------------------------------------------------
    |
    | This configuration option determines the URI at which the Spark billing
    | portal is available. You are free to change this URI to a value that
    | you prefer. You shall link to this location from your application.
    |
    */

    'path' => 'billing',

    /*
    |--------------------------------------------------------------------------
    | Spark Middleware
    |--------------------------------------------------------------------------
    |
    | These are the middleware that requests to the Spark billing portal must
    | pass through before being accepted. Typically, the default list that
    | is defined below should be suitable for most Laravel applications.
    |
    */

    'middleware' => ['web', 'auth'],

    /*
    |--------------------------------------------------------------------------
    | Branding
    |--------------------------------------------------------------------------
    |
    | These configuration values allow you to customize the branding of the
    | billing portal, including the primary color and the logo that will
    | be displayed within the billing portal. This logo value must be
    | the absolute path to an SVG logo within the local filesystem.
    |
    */

    // 'brand' =>  [
    //     'logo' => realpath(__DIR__.'/../public/svg/billing-logo.svg'),
    //     'color' => 'bg-gray-800',
    // ],

    /*
    |--------------------------------------------------------------------------
    | Proration Behavior
    |--------------------------------------------------------------------------
    |
    | This value determines if charges are prorated when making adjustments
    | to a plan such as incrementing or decrementing the quantity of the
    | plan. This also determines proration behavior if changing plans.
    |
    */

    'prorates' => true,

    /*
    |--------------------------------------------------------------------------
    | Spark Billables
    |--------------------------------------------------------------------------
    |
    | Below you may define billable entities supported by your Spark driven
    | application. You are free to have multiple billable entities which
    | can each define multiple subscription plans available for users.
    |
    | In addition to defining your billable entity, you may also define its
    | plans and the plan's features, including a short description of it
    | as well as a "bullet point" listing of its distinctive features.
    |
    */

    'billables' => [

        'user' => [
            'model' => User::class,

            'trial_days' => 0,

            'default_interval' => 'monthly',

            'plans' => [
                [
                    'name' => 'Business Account',
                    'short_description' => 'Show that you care about your customers. Subscribe as a premium company and claim your page to take advantage of the membership.
                    In order to signup simply find your company on our site and click on Claim Company',
                    'monthly_id' => env('SPARK_STANDARD_MONTHLY_PLAN', 34642),
                    'yearly_id' => env('SPARK_STANDARD_YEARLY_PLAN', 34643),
                    'features' => [
                        'Manage One Company',
                        'Email Notifications when someone posts a new review to your company',
                        'Add your own company description',
                        'No ADS on your company page',
                        'Premium Company Listing',
                        'Reply to reviews in the name of your company'
                    ],
                    'archived' => false,
                ],
            ],

        ],

    ]
];