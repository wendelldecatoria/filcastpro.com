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
        //'middleware' => ['auth', 'admin']
    ], function () {
            Auth::routes();    
            
            Route::group([
                'prefix' => '',
                'middleware' => ['auth']
            ], function() {
                    Route::get('home', 'AdminController@home')->name('admin.home');
                    Route::resource('artists', 'ActorController', [
                        'parameters' => 'singular'
                    ]);

                    Route::resource('images', 'ImageController', [
                        'parameters' => 'singular',
                        'except' => ['index','edit','store','update','create'],
                    ]);

                    Route::resource('contact', 'ContactController', [
                        'parameters' => 'singular',
                        'except' => ['show','edit','store','update','create','destroy'],
                    ]);

                    Route::resource('register', 'RegisterController', [
                        'parameters' => 'singular',
                        'except' => ['show','edit','store','update','create','destroy'],
                    ]);

                    Route::get('archived', 'WhatsUpController@archived')->name('whats-up.archived');
                    Route::resource('whats-up', 'WhatsUpController', [
                        'parameters' => 'singular',
                        'except' => ['show'],
                    ]);

                    Route::resource('inquiry', 'InquiryController', [
                        'parameters' => 'singular',
                        'except' => ['show','edit','store','update','create','destroy'],
                    ]);

                   Route::resource('video', 'VideoController', [
                        'parameters' => 'singular',
                        'except' => ['show'],
                    ]);

                    Route::resource('whats-on', 'WhatsOnController', [
                        'parameters' => 'singular',
                        'except' => ['show'],
                    ]);

                    Route::resource('skill', 'SkillController', [
                        'parameters' => 'singular',
                        'except' => ['show'],
                    ]);

                    Route::resource('creatives', 'CreativeController', [
                        'parameters' => 'singular',
                        'except' => ['show'],
                    ]);
                } 
            );
        }
    );

    // Route::get('', 'WebsiteController@index')->name('web.index');
    Route::group([
        'prefix'     => '',
    ], function() {

        Route::get('', 'WebsiteController@index')->name('web.index');
        Route::get('index', 'WebsiteController@index')->name('web.index');
        Route::get('home', 'WebsiteController@home')->name('web.home');
        
        Route::post('artist/search', 'WebActorController@search')->name('artist.search');
        Route::resource('artist', 'WebActorController', [
            'parameters' => 'singular',
            'except' => ['edit','store','update','create','destroy'],
        ]);
       
       
        Route::post('creative/search', 'WebCreativeController@search')->name('creative.search');
        Route::resource('creative', 'WebCreativeController', [
            'parameters' => 'singular',
            'except' => ['edit','store','update','create','destroy'],
        ]);
        
        Route::get('whats-up', 'WebsiteController@whatsUp')->name('web.whats-up');
        Route::get('whats-up/{id}', 'WebsiteController@showWhatsUp')->name('web.show-whats-up');

        Route::get('whats-on', 'WebsiteController@whatsOn')->name('web.whats-on');

        Route::get('whats-in', 'WebsiteController@whatsIn')->name('web.whats-in');

        Route::get('contact', 'WebsiteController@contact')->name('web.contact');
        Route::post('store', 'WebsiteController@store')->name('web.store-contact');

        Route::get('register', 'WebsiteController@register')->name('web.register');
        Route::post('store-register', 'WebsiteController@storeRegister')->name('web.store-register'); 
        
        Route::post('inquire','WebsiteController@inquire')->name('web.inquire');
    });
    
});