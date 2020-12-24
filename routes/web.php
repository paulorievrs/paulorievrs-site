<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImagelinkController;
use App\Http\Controllers\ExtralinkController;
use App\Http\Controllers\GiveawayController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserAuth;

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

Route::get('/', [ PostController::class, 'home']);

Route::get('/login', function () {
    return view('login');
});

Route::get('sendbasicemail','App\Http\Controllers\MailController@index');


Route::get('/postagens', [ PostController::class, 'postagens']);
Route::get('/postagens/{id}', [ PostController::class, 'show']);

Route::get('/profile', function () {
    return view('profile');
});



Route::get('/cadastro', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);

Route::post('/logar', [UserAuth::class, 'login']);

Route::group(['middleware' => 'web'], function() {

    Route::get('/admin', function () {
        return view('admin');
    });

    Route::get('/logout', [ UserAuth::class, 'logout']);

    Route::get('/posts', [ PostController::class, 'index']);
    Route::get('/createposts', [ PostController::class, 'create']);
    Route::get('/editpost/{id}', [ PostController::class, 'edit']);
    Route::put('/posts/{id}', [ PostController::class, 'update']);
    Route::delete('/posts/{id}', [ PostController::class, 'destroy']);
    Route::post('/posts', [ PostController::class, 'store']);

    Route::get('/editimagelink/{id}', [ ImagelinkController::class, 'edit']);
    Route::put('/imagelinks/{id}', [ ImagelinkController::class, 'update']);
    Route::delete('/imagelinks/{id}', [ ImagelinkController::class, 'destroy']);
    Route::get('/createimagelink', [ ImagelinkController::class, 'create' ]);
    Route::post('/imagelinks', [ ImagelinkController::class, 'store' ]);
    Route::get('/imagelinks', [ ImagelinkController::class, 'index' ]);

    Route::get('/editextralinks/{id}', [ ExtralinkController::class, 'edit']);
    Route::put('/extralinks/{id}', [ ExtralinkController::class, 'update']);
    Route::delete('/extralinks/{id}', [ ExtralinkController::class, 'destroy']);
    Route::get('/createextralink', [ ExtralinkController::class, 'create' ]);
    Route::post('/extralinks', [ ExtralinkController::class, 'store' ]);
    Route::get('/extralinks', [ ExtralinkController::class, 'index' ]);

    Route::get('/creategiveaways', [ GiveawayController::class, 'create' ]);
    Route::post('/giveaways', [ GiveawayController::class, 'store' ]);
    Route::get('/giveaways', [ GiveawayController::class, 'index' ]);





});;
