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
    // main
    $router->get('/', ['as'=> 'home','uses'=> 'HomeController@index']);

    // Departments
    $router->get('departments', ['as' => 'departments.index', 'uses' => 'DepartmentController@index']);
    $router->get('departments/{codes}', ['as'  => 'departments.show', 'uses' => 'DepartmentController@showMultiple']);

    // Provinces
    $router->get('provinces', ['as' => 'provinces.index', 'uses'=> 'ProvinceController@index']);
    $router->get('provinces/{codes}', ['as'=> 'provinces.show', 'uses'=> 'ProvinceController@showMultiple']);

    // Districts
    $router->get('districts', ['as' => 'districts.index', 'uses'=> 'DistrictController@index']);
    $router->get('districts/{codes}', ['as' => 'districts.show', 'uses'=> 'DistrictController@showMultiple']);
});
