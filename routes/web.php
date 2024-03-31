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

$router->group(['prefix' => 'api'], function () use ($router)
{
    // Departments
    $router->get('departments', 'DepartmentController@index');
    $router->get('departments/{codes}', 'DepartmentController@showMultiple');

    // Provinces
    $router->get('provinces', 'ProvinceController@index');
    $router->get('provinces/{codes}', 'ProvinceController@showMultiple');

    // Districts
    $router->get('districts', 'DistrictController@index');
    $router->get('districts/{codes}', 'DistrictController@showMultiple');
});
