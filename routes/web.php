<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUser;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\front\GetPostController;
use App\Http\Controllers\front\GetPageController;
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
// normal
Route::get('/',[GetPostController::class,'list']);
// show different pages
Route::get('/{slug}',[GetPageController::class,'show']);
Route::get('/detail/{slug}',[GetPostController::class,'detail']);


// admin panel
Route::view('/admin/login','admin.login');
Route::post('/admin/login',[AuthUser::class,'login']);

Route::group(['middleware'=>['admin_auth']],function(){
    Route::get('admin/logout',function(){
        session()->forget('BLOG_USER_ID');
        return redirect('/admin/login');
    });


    // post
    Route::get('/admin/post/list',[PostController::class,'listing'])->name('dashboard');
    Route::view('/admin/post/add','admin.post.add');
    Route::post('/admin/post/add',[PostController::class,'add']);
    Route::get('/admin/post/delete/{id}',[PostController::class,'delete']);
    Route::get('/admin/post/edit/{id}',[PostController::class,'edit']);
    Route::post('/admin/post/edit/{id}',[PostController::class,'update']);

    // Page
    Route::get('/admin/page/list',[PageController::class,'listing']);
    Route::view('/admin/page/add','admin.page.add');
    Route::post('/admin/page/add',[PageController::class,'add']);
    Route::get('/admin/page/delete/{id}',[PageController::class,'delete']);
    Route::get('/admin/page/edit/{id}',[PageController::class,'edit']);
    Route::post('/admin/page/edit/{id}',[PageController::class,'update']);

    // contact
    Route::get('admin/contact/list',[ContactController::class,'listing']);
});

