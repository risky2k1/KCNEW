<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\IndexController;
use  App\Http\Controllers\DocumentController;


use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\PropertiCategoryController;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\TintucController;
use  App\Http\Controllers\BinhluanController;

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


 Route::get('/', [IndexController::class, 'index']);

 Route::get('/danh-muc-{slug}', [IndexController::class, 'danhmuc'])->name('danh-muc');


 Route::get('/bai-viet-{slug}', [IndexController::class, 'detail'])->name('bai-viet');;

 
 Route::get('/tintucmoinhat', [IndexController::class, 'tintucmoinhat']);
 Route::get('/tinnong', [IndexController::class, 'tinnong']);
 Route::get('/xemnhieunhat', [IndexController::class, 'xemnhieunhat']);
 Route::get('/properti/{pro}', [IndexController::class, 'properti']);
 Route::get('/category/{cat}', [IndexController::class, 'category']);
 Route::get('/tag/{tag}', [IndexController::class, 'tag']);


 Route::post('/binhluan-{tin}-{user}', [IndexController::class, 'binhluan'])->name('binhluan');
 Route::post('like', [IndexController::class, 'like'])->name('like');
 Route::post('search', [IndexController::class, 'search']);




Route::get('/error/404', [IndexController::class, 'ero'])->name('404');
Route::get('/new/coming', [IndexController::class, 'coming'])->name('coming');
Route::get('/about', [IndexController::class, 'about'])->name('about');


Route::get('/report{id}', [IndexController::class, 'report'])->name('report');






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [HomeController::class,'dashboard']);
    


    Route::resource('danhmuc', CategoryController::class);
    Route::resource('thuoctinhdanhmuc', PropertiCategoryController::class);
    Route::resource('user', UserController::class);
    Route::resource('tintuc', TintucController::class);
    Route::resource('binhluan', BinhluanController::class);

    // Route::post('/duyet/{id}', [BinhluanController::class,'duyet']);
    Route::get('/trolai/{binhluan}',[BinhluanController::class,'trolai'])->name('trolai');
    Route::post('/duyet/{id}', [TintucController::class,'duyet']);
    
    Route::get('/tuchoi/{id}', [TintucController::class,'tuchoi']);

    Route::post('/select-delivery', [TintucController::class,'select_delivery']);

    Route::post('/themvaitro',[UserController::class,'themvaitro'])->name('themvaitro');
    Route::post('/themquyen',[UserController::class,'themquyen'])->name('themquyen');

    Route::post('/timkiembaiviet',[TintucController::class,'timkiembaiviet']);


    Route::post('/tieptucthem',[PropertiCategoryController::class,'tieptucthem']);
    Route::post('/taobaiviet',[Tintucontroller::class,'taobaiviet']);
    
});


// Route::get('up', [DocumentController::class,'create']);
