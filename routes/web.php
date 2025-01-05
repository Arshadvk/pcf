<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\AdminController;
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
Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/news', [FrontEndController::class, 'news'])->name('news');
Route::get('/our-leaders', [FrontEndController::class, 'team'])->name('team');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/gallery', [FrontEndController::class, 'gallery'])->name('gallery');

//auth 
Route::get('/login', [FrontEndController::class, 'login'])->name('login');
Route::get('/register', [FrontEndController::class, 'register'])->name('register');
Route::get('/reset-password', [FrontEndController::class, 'resetPassword']);

Route::post('logout', [AdminController::class, 'logout'])->name('logout');
Route::post('/postLogin', [AdminController::class, 'postLogin'])->name('postLogin');
Route::post('/postUser', [MemberController::class, 'store'])->name('postUser');

// admin side  
Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/dashboard', [FrontEndController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/change_password', [AdminController::class, 'password'])->name('postPassword');

    
    Route::get('/add-news', [NewsController::class, 'index'])->name('add-news');
    Route::get('/list-news', [NewsController::class, 'list'])->name('list-news');
    Route::post('/store-news', [NewsController::class, 'store'])->name('store-news');
    Route::get('/edit-news/{id}', [NewsController::class, 'edit'])->name('edit-news');
    
    
    Route::get('/add-team', [FrontEndController::class, 'addTeam'])->name('add-team');
    Route::get('/list-team', [FrontEndController::class, 'listTeam'])->name('list-team');
    
    
    Route::post('/putUser/{id}',[MemberController::class, 'update'])->name('putUser');
    Route::get('/add-member', [FrontEndController::class, 'addUser'])->name('add-user');
    Route::get('/edit-user/{id}', [MemberController::class, 'editUser'])->name('edit.user');
    Route::get('/list-member', [FrontEndController::class, 'listUser'])->name('list-user');
    Route::get('/update-status/{id}/{status}', [MemberController::class, 'update_status'])->name('update_status');
    

    Route::get('/user/{id}', [FrontEndController::class, 'singleUser'])->name('single.user');
    Route::get('/user-requests', [FrontEndController::class, 'user_requests'])->name('user_requests');
});
