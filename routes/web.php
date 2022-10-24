<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\blog;
use App\Http\Controllers\home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function () {

    Route::get('index', [admin::class, 'index']);

    Route::get('addArticle', [admin::class, 'addArticle']);

    Route::get('addCategory', [admin::class, 'addCategory']);

    Route::post('storeCategory', [admin::class, 'storeCategory']);

    Route::get('deleteCat/{id}', [admin::class, 'deleteCat']);

    Route::get('showCategory', [admin::class, 'showCategory']);

    Route::post('storeArticle', [admin::class, 'storeArticle']);

    Route::get('showArticle', [admin::class, 'showArticle']);

    Route::get('deleteArt/{id}', [admin::class, 'deleteArt']);

    Route::get('viewArticle/{id}', [admin::class, 'viewArticle']);

    Route::get('logout', [admin::class, 'logout']);
});

Route::get('login', [admin::class, 'login']);

Route::post('loginRequest', [admin::class, 'loginRequest']);

Route::get('home', [blog::class, 'index']);

Route::get('post/{id}', [blog::class, 'post']);

Route::get('postsInCat/{cat_id}', [blog::class, 'postsInCat']);

Route::get('about', [blog::class, 'about']);

Route::post('saveComment', [blog::class, 'saveComment']);

Route::get('page404', [admin::class, 'page404'])->name('page404');