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

Route::get('/', 'GalleryController@index1');
Route::get('/app/gallery_media/{id}', 'PhotoController@index');

Route::get('/about', function () {
    $albums = \App\Album::all();
    return view('app.about',compact("albums"));
});

Route::get('/contact', "ContactMessageController@create");
Route::post('/contact', "ContactMessageController@store");
Route::post('/views', "PhotoController@views");
Route::get('/video_world', "PhotoController@video_world");
Route::get('/galeries', "GalleryController@index2");

Auth::routes();

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'admin']],
    function () {

        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/adminMedia/{id}', 'HomeController@show');

        Route::get('/photos/upload_p', 'PhotoController@upload');
        Route::post('/photos/upload_p', 'PhotoController@store');
        Route::post('/photos/updatePhoto/{id}', 'PhotoController@update');
        Route::get('/photos/edit_photo/{id}', 'PhotoController@edit');
        Route::post('/photos/destroy/{id}', 'PhotoController@destroy');

        Route::post('/albums/delete/{id}', 'GalleryController@destroy');
        Route::post('/albums/updateAlbum/{id}', 'GalleryController@update');
        Route::get('/albums/edit_album/{id}', 'GalleryController@edit');
        Route::get('/create', 'GalleryController@create');
        Route::get('/albums/all_albums', 'GalleryController@index');
        Route::get('/albums/{id}', 'GalleryController@show');
        Route::post('/create', 'GalleryController@store');
        Route::post('/menu/update-order','HomeController@updateOrder');  
    }
);
/* Route::get('menu/index','MenuController@index');
Route::post('menu/update-order','MenuController@updateOrder');  */

