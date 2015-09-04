<?php
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'Home Page';
});

Route::get('/test', function () {
    return "TEST";
});

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/foo', ['middleware' => 'manager', 'uses' => function()
{
    return 'this page is only for managers';
}]);

#Route::get('articles', 'ArticlesController@index');
#Route::get('articles/create', 'ArticlesController@create');
#Route::get('articles/{id}', 'ArticlesController@show');
#Route::post('articles', 'ArticlesController@store');
#Route::get('articles/{id}/edit', 'ArticlesController@edit');
