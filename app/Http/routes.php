<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Route;

Route::pattern('id', '[1-9][0-9]*');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::get('password/reset', 'Auth\PasswordController@showLinkRequestForm');

Route::group(['middleware' => 'web'], function () {

    /*
     * front route
     */
    Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
    Route::get('fr', 'FrontController@index');
    Route::get('en', 'FrontController@index');
    Route::get('agency', 'FrontController@showAgency');
    Route::get('guadeloupe', 'FrontController@showGuadeloupe');
    Route::get('offer', 'FrontController@showOffer');
    Route::get('ourweddings', 'FrontController@showOurweddings');
    Route::get('ourweddings/{id}/{title}', 'FrontController@showArticle');
    Route::get('contact', 'FrontController@showContact');
    Route::post('storeContact', 'FrontController@storeContact');

    /*
     * login route
     */
    Route::group(['middleware' => ['throttle:60,1']], function () {
        Route::any('login', 'LoginController@login');
    });

    /*
     * logout route
     */
    Route::get('logout', 'LoginController@logout');

    /*
     * admin route
     */
    Route::group(['middleware' => ['auth', 'admin']], function () {

        /*
         * compte management route
         */
        Route::get('dashboard', 'AdminController@index');
        Route::get('dashboard/status/{id}', 'AdminController@changeEventStatus');
        Route::get('dashboard/editCustomer/{id}/{name}', 'AdminController@editCustomer');
        Route::post('updateCustomer', 'AdminController@updateCustomer');
        Route::get('dashboard/editEvent/{id}/{name}', 'AdminController@editEvent');
        Route::post('updateEvent', 'AdminController@updateEvent');

        /*
         * inscription route
         */
        Route::controller('inscription', 'InscriptionController');

        /*
         * folder management route
         */
        Route::get('admin', 'AdminController@admin');
        Route::get('admin/showFolder/{id}/{name}', 'AdminController@showFolder');
        Route::get('admin/showFile/{id}/{name}/{subfolder}', 'AdminController@showFile');
        Route::get('admin/downloadFile/{id}/{name}/{subfolder}/{file}', 'AdminController@downloadFile');
        Route::post('admin/uploadFile/{id}/{name}/{subfolder}', 'AdminController@uploadFile');
        Route::get('admin/deleteFile/{id}/{name}/{subfolder}/{file}', 'AdminController@deleteFile');

        /*
         * article management route
         */
        Route::get('article', 'AdminController@showArticle');
        Route::get('createArticle', 'AdminController@createArticle');
        Route::post('storeArticle', 'AdminController@storeArticle');
        Route::get('editArticle/{id}/{title}', 'AdminController@editArticle');
        Route::post('updateArticle/{id}/{title}', 'AdminController@updateArticle');
        Route::get('deleteArticle/{id}/{title}', 'AdminController@deleteArticle');
        Route::get('article/status/{id}', 'AdminController@changeArticleStatus');
        Route::get('article/addPicture', 'AdminController@addPicture');
        Route::post('article/storePicture', 'AdminController@storePicture');

        /*
         * review management route
         */
        Route::get('testimonial', 'AdminController@testimonial');
        Route::get('addTestimonial/{id}', 'AdminController@addTestimonial');
        Route::post('storeTestimonial', 'AdminController@storeTestimonial');
    });

    /*
     * user route
     */
    Route::group(['middleware' => ['auth']], function () {
        Route::get('user/{id}/{name}', 'UserController@index');
        Route::get('user/showFile/{id}/{name}/{subfolder}', 'UserController@showFile');
        Route::get('user/downloadFile/{id}/{name}/{subfolder}/{file}', 'UserController@downloadFile');
        Route::get('user/editPersoInfo/{id}/{name}/', 'UserController@editPersoInfo');
        Route::post('user/updatePersoInfo/{id}/{name}/', 'UserController@updatePersoInfo');
        Route::post('user/storeComment/{id}/{name}', 'UserController@storeComment');
    });
});
