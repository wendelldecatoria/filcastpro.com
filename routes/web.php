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

Route::group(['middleware' => 'web'], function () {

    Route::group([
        'prefix' => 'admin',
        //'middleware' => ['ability:s2s.*,view_module,true']
        'middleware' => ['auth', 'admin']
    ], function () {
            // Route::post('login', 'Auth\AuthController@authenticate')->name('login');
        }
    );

    //Route::get('LoginFailed','Auth\AuthController@LoginFailed')->name('LoginFailed');
    
    Route::get('', 'WebsiteController@index')->name('web.index');
    Route::group([
        'prefix'     => 'web',
    ], function() {
        Route::get('', 'WebsiteController@index')->name('web.index');
        Route::get('index', 'WebsiteController@index')->name('web.index');
        Route::get('home', 'WebsiteController@home')->name('home');
        Route::get('actors', 'WebsiteController@actors')->name('web.actors');
        Route::get('news-room', 'WebsiteController@newsRoom')->name('web.news-room');
        Route::get('contact', 'WebsiteController@contact')->name('web.contact');
    });
  
    
});