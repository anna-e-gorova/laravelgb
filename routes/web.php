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
| Web News
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
Route::get('/feedback', [HelloController::class, 'feedback'])
    ->name('feedback');
Route::post('/feedback', [HelloController::class, 'feedback'])
    ->name('feedback');
Route::get('/order', [HelloController::class, 'order'])
    ->name('order');
Route::post('/store', [HelloController::class, 'store'])
    ->name('store');

Route::get('/info', function () {
  return view('info');
})->name('info');

//news routes
Route::group(['prefix' => 'news', 'as' => 'news.'], function() {
    Route::get('/', [NewsController::class, 'index'])
        ->name('index');
    Route::get('/category', [CategoryController::class, 'index'])
        ->name('categories');
    Route::get('/{id}', [NewsController::class, 'show'])
        ->where('id', '\d+')
        ->name('show');
    Route::get('/category/{id?}', [NewsController::class, 'index'])
        ->name('category');
});

//admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', AdminController::class)
        ->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});
