<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsController;

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

// user side 
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/our-leaders', [FrontendController::class, 'team'])->name('team');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

//auth 
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/register', [FrontendController::class, 'register'])->name('register');
Route::get('/reset-password', [FrontendController::class, 'resetPassword']);

Route::post('logout', [AdminController::class, 'logout'])->name('logout');
Route::post('/postLogin', [AdminController::class, 'postLogin'])->name('postLogin');
Route::post('/postUser', [MemberController::class, 'store'])->name('postUser');

// admin side  
Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/change_password', [AdminController::class, 'password'])->name('postPassword');

    
    Route::get('/add-news', [NewsController::class, 'index'])->name('add-news');
    Route::get('/list-news', [NewsController::class, 'list'])->name('list-news');
    Route::post('/store-news', [NewsController::class, 'store'])->name('store-news');
    Route::get('/edit-news/{id}', [NewsController::class, 'edit'])->name('edit-news');
    Route::get('/delete-news/{id}', [NewsController::class, 'delete'])->name('delete.news');
    
    Route::get('/add-gallery', [GalleryController::class, 'index'])->name('add-gallery');
    Route::get('/list-gallery', [GalleryController::class, 'list'])->name('add-gallery');
    Route::post('/store-gallery', [GalleryController::class, 'store'])->name('store-gallery');
    Route::post('/delete-gallery/{id}', [GalleryController::class, 'delete'])->name('delete.gallery');


    Route::get('/add-team', [FrontendController::class, 'addTeam'])->name('add-team');
    Route::get('/list-team', [FrontendController::class, 'listTeam'])->name('list-team');
    
    Route::post('/update-membership-number/{id}', [MemberController::class, 'updateMembershipNumber']);

    
    Route::post('/putUser/{id}',[MemberController::class, 'update'])->name('putUser');
    Route::get('/add-member', [FrontendController::class, 'addUser'])->name('add-user');
    Route::get('/edit-user/{id}', [MemberController::class, 'editUser'])->name('edit.user');
    Route::get('/list-member', [FrontendController::class, 'listUser'])->name('list-user');
    Route::get('/update-status/{id}/{status}', [MemberController::class, 'update_status'])->name('update_status');
    Route::post('/update-status/{id}/{status}', [MemberController::class, 'status_reject'])->name('update_status');
    Route::post('/export-users', [MemberController::class, 'exportUsers'])->name('export.users');

    Route::get('/upload', [MemberController::class, 'showForm']);
    Route::post('/upload', [MemberController::class, 'upload'])->name('upload');


    Route::get('/user/{id}', [FrontendController::class, 'singleUser'])->name('single.user');
    Route::get('/delete/{id}', [MemberController::class, 'delete'])->name('delete.user');
    Route::get('/user-requests', [FrontendController::class, 'user_requests'])->name('user_requests');
});
