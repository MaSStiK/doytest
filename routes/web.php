<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('add', "TasksController@add");

$router->get('get/{task_id}', "TasksController@get");

$router->post('edit/{task_id}', "TasksController@edit");

$router->get('delete/{task_id}', "TasksController@delete");

$router->get('showAll', "TasksController@showAll");