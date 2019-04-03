<?php


    Route::group(['prefix' => 'admin'], function ($router) {

        Route::get('login', [
            'uses' => '\iPremium\Alaska\Controllers\LoginController@showLoginForm',
            'as' => 'admin-login'
        ]);

        Route::post('login', [
            'uses' => '\iPremium\Alaska\Controllers\LoginController@login',
            'as' => 'admin-post-login'
        ]);
        Route::post('logout', [
            'uses' => '\iPremium\Alaska\Controllers\LoginController@logout',
            'as' => 'admin-logout'
        ]);
        Route::get('password-forgot', [
            'uses' => '\iPremium\Alaska\Controllers\ForgotPasswordController@showLinkRequestForm',
            'as' => 'admin-password-forgot'
        ]);
        Route::post('password-email', [
            'uses' => '\iPremium\Alaska\Controllers\ForgotPasswordController@sendResetLinkEmail',
            'as' => 'admin-password-email'
        ]);
        Route::get('password-reset/{token}', [
            'uses' => '\iPremium\Alaska\Controllers\ResetPasswordController@showResetForm',
            'as' => 'admin-password-reset'
        ]);
        Route::post('password-reset', [
            'uses' => '\iPremium\Alaska\Controllers\ResetPasswordController@reset',
            'as' => 'admin-post-password-reset'
        ]);

        Route::group(['middleware' => 'auth:admin'], function ()
        {
        	// protected routes...
            Route::get('/', function(){
                return view('alaska-admin::home');
            });
        });
    });
