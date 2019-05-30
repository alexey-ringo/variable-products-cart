<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', 'Admin\DashboardController@login');
Route::post('register-7g35r2z', 'Admin\DashboardController@register');

//Группа роутов для админки
//'prefix' => 'a7dm0in3' - URI-префикс для Админки
//'namespace' => 'Admin' - namespace для контроллеров Админки (папка Admin)
Route::group([/*'prefix' => 'a7dm0in3', */'namespace' => 'Admin', 'middleware' => ['auth:admin-api'] ], function () {
    Route::get('/logout', 'DashboardController@logout');
    Route::get('/current-user', 'DashboardController@currentUser');
});

