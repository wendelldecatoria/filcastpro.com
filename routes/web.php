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

                    Route::get('whats-in/{whats_in}/tags', 'WhatsInController@tags')->name('whats-in.tags');
                    Route::resource('whats-in', 'WhatsInController', [
                        'parameters' => 'singular',
                        'except' => ['show'],
                    ]);

                    Route::resource('category', 'CategoryController', [
                        'parameters' => 'singular',
                        'except' => ['show'],
                    ]);

                    Route::resource('writer', 'WriterController', [
                        'parameters' => 'singular',
                        'except' => ['show'],
                    ]);
                } 
            );
        }
    );

    Route::group([
        'prefix'     => '',
    ], function() {

        Route::get('', 'WebsiteController@index')->name('web.index');
        Route::get('index', 'WebsiteController@index')->name('web.index');
        Route::get('home', 'WebsiteController@home')->name('web.home');
        
        Route::post('artist/search', 'WebActorController@search')->name('web.artist.search');
        Route::resource('artist', 'WebActorController', [
            'parameters' => 'singular',
            'except' => ['edit','store','update','create','destroy'],
            'names' => [
                'index' => 'web.artist.index',
                'show' => 'web.artist.show',
            ]
        ]);
       
       
        Route::post('creative/search', 'WebCreativeController@search')->name('web.creative.search');
        Route::resource('creative', 'WebCreativeController', [
            'parameters' => 'singular',
            'except' => ['edit','store','update','create','destroy'],
            'names' => [
                'index' => 'web.creative.index',
                'show' => 'web.creative.show',
            ]
        ]);
    
        Route::get('whats-up/disclaimer', 'WebWhatsUpController@disclaimer')->name('web.whats-up.disclaimer');
        Route::resource('whats-up', 'WebWhatsUpController', [
            'parameters' => 'singular',
            'except' => ['edit','store','update','create','destroy'],
            'names' => [
                'index' => 'web.whats-up.index',
                'show' => 'web.whats-up.show',
            ]
        ]);

        Route::resource('whats-on', 'WebWhatsOnController', [
            'parameters' => 'singular',
            'except' => ['edit','store','update','create','destroy'],
            'names' => [
                'index' => 'web.whats-on.index',
                'show' => 'web.whats-on.show',
            ]
        ]);

        Route::post('whats-in/search', 'WebWhatsInController@search')->name('web.whats-in.search');
        Route::resource('whats-in', 'WebWhatsInController', [
            'parameters' => 'singular',
            'except' => ['edit','store','update','create','destroy'],
            'names' => [
                'index' => 'web.whats-in.index',
                'show' => 'web.whats-in.show',
            ]
        ]);

        Route::resource('contact', 'WebContactController', [
            'parameters' => 'singular',
            'except' => ['edit','show','update','create','destroy'],
            'names' => [
                'index' => 'web.contact.index',
                'store' => 'web.contact.store',
            ]
        ]);
        
        Route::resource('register', 'WebRegisterController', [
            'parameters' => 'singular',
            'except' => ['edit','show','update','create','destroy'],
            'names' => [
                'index' => 'web.register.index',
                'store' => 'web.register.store',
            ]
            
        ]);

        Route::post('actor-inquire','WebsiteController@actorInquire')->name('web.actor-inquire');
        Route::post('creative-inquire','WebsiteController@creativeInquire')->name('web.creative-inquire');
    });
    
});