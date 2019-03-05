<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('companies', 'CompanyController@index');
Route::get('companies/create', 'CompanyController@create');
Route::post('companies', 'CompanyController@store');
Route::get('companies/{id}', 'CompanyController@show');
Route::get('companies/{id}/edit', 'CompanyController@edit');
Route::patch('companies/{id}', 'CompanyController@update');
Route::delete('companies/{id}', 'CompanyController@destroy');

Route::get('employes', 'EmployeController@index');
Route::get('employes/create', 'EmployeController@create');
Route::post('employes', 'EmployeController@store');
Route::get('employes/{id}', 'EmployeController@show');
Route::get('employes/{id}/edit', 'EmployeController@edit');
Route::patch('employes/{id}', 'EmployeController@update');
Route::delete('employes/{id}', 'EmployeController@destroy');
