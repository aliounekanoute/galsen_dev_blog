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

$router->get('/', 'UserController@home');
$router->get('/sign-in', 'UserController@signIn');
$router->get('/sign-up', 'UserController@signUp');
$router->get('/logout', 'UserController@logout');


$router->post('/sign-in', 'UserController@signIn');
$router->post('/sign-up', 'UserController@signUp');

$router->post('/addArticle', 'ArticleController@addArticle');
