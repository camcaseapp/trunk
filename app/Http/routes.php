<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    echo '<a href="redirect">FB Login</a>';
    return $app->version();
});

$app->get('/redirect', 'SocialAuthController@redirect');
$app->get('/callback', 'SocialAuthController@callback');