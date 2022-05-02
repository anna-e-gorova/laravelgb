<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', [HelloController::class, 'index'])
    ->name('hello');

Route::get('/info', function () {
  return view('info');
});

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/news/category/{id?}', [NewsController::class, 'index'])
    ->name('news.category');

//admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', AdminController::class)
        ->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});
