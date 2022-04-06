<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'App\Http\Controllers\API'], function ($router) {
    Route::group(['prefix' => 'admins'] , function ($router) {
            
        Route::post('login', 'AdminController@login');

        Route::post('register', 'AdminController@register');

        Route::get('profile', 'AdminController@myProfile');
    });

    Route::group(['prefix' => 'clients'] , function ($router) {
            
        Route::post('', 'ClientController@store');

        Route::get('{id}/invoices', 'InvoiceController@clientInvoices');
        
        Route::get('{id}', 'ClientController@show');
    });

    Route::group(['prefix' => 'invoices'] , function ($router) {

        Route::get('', 'InvoiceController@index');

        Route::post('', 'InvoiceController@store');
        
        Route::get('{id}', 'InvoiceController@show');
            
    });
});
