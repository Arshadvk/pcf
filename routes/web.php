<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommitteeController;

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
Route::get('/emirate/{id}', [FrontendController::class, 'emirate'])->name('emirate');

//auth 
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/register', [FrontendController::class, 'register'])->name('register');
Route::get('/reset-password', [FrontendController::class, 'resetPassword']);

Route::post('logout', [AdminController::class, 'logout'])->name('logout');
Route::post('/postLogin', [AdminController::class, 'postLogin'])->name('postLogin');
Route::post('/postUser', [MemberController::class, 'store'])->name('postUser');
Route::post('/contact-form',[ContactController::class, 'storeContactForm'])->name('contact-form');

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
    Route::get('/list-gallery', [GalleryController::class, 'list'])->name('list-gallery');
    Route::get('/list-gallery/{id}', [GalleryController::class, 'list'])->name('list-gallery');
    Route::post('/store-gallery', [GalleryController::class, 'store'])->name('store-gallery');
    Route::delete('/delete-gallery/{id}', [GalleryController::class, 'delete'])->name('delete.gallery');


    Route::get('/add-committee', [CommitteeController::class, 'create'])->name('add-committe');
    Route::get('/list-committee', [CommitteeController::class, 'index'])->name('list-committee');
    Route::post('/store-committee', [CommitteeController::class, 'store'])->name('storeCommitte');
    Route::get('/edit-committee/{id}', [CommitteeController::class, 'editCommittee'])->name('edit-committee');
    Route::delete('/delete-committee/{id}', [CommitteeController::class, 'delete'])->name('delete.committee');

    Route::get('/add-national-committee', [CommitteeController::class, 'createNational'])->name('add-national-committee');
    Route::get('/list-national-committee', [CommitteeController::class, 'listGlobalCommitte'])->name('list-national-committee');
     Route::get('/edit-global-committee/{id}', [CommitteeController::class, 'editGlobal'])->name('edit-global-committee');


    Route::get('/add-leaders', [CommitteeController::class, 'createLeaders'])->name('add-leaders');
    Route::get('/edit-leader/{id}', [CommitteeController::class, 'editPdpLeaders'])->name('edit-leader');
    Route::get('/list-leaders', [CommitteeController::class, 'listPdpLeaders'])->name('list-leaders');



    Route::get('/add-team', [FrontendController::class, 'addTeam'])->name('add-team');
    Route::get('/list-team', [FrontendController::class, 'listTeam'])->name('list-team');
    
    Route::post('/update-membership-number/{id}', [MemberController::class, 'updateMembershipNumber']);
    Route::put('/update-membership-type/{id}', [MemberController::class, 'updateMembershipType'])->name('update_membership_type');

    
    Route::post('/putUser/{id}',[MemberController::class, 'update'])->name('putUser');
    Route::get('/add-member', [FrontendController::class, 'addUser'])->name('add-user');
    Route::get('/edit-user/{id}', [MemberController::class, 'editUser'])->name('edit.user');
    Route::get('/list-member', [FrontendController::class, 'listUser'])->name('list-user');
    Route::post('/update-photo/{id}', [MemberController::class, 'update_photo'])->name('update_photo');
    Route::get('/update-status/{id}/{status}', [MemberController::class, 'update_status'])->name('update_status');
    Route::post('/update-status/{id}/{status}', [MemberController::class, 'status_reject'])->name('status_reject');
    Route::post('/export-users', [MemberController::class, 'exportUsers'])->name('export.users');

    Route::get('/upload', [MemberController::class, 'showForm']);
    Route::post('/upload', [MemberController::class, 'upload'])->name('upload');


    Route::get('/user/{id}', [FrontendController::class, 'singleUser'])->name('single.user');
    Route::get('/delete/{id}', [MemberController::class, 'delete'])->name('delete.user');
    Route::get('/user-requests', [FrontendController::class, 'user_requests'])->name('user_requests');

    Route::get('/member/{id}/download-card', [FrontendController::class, 'downloadUserCard'])->name('member.downloadCard');


    // Admin User Management Routes
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');

    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])
        ->name('admin.users.edit');

    Route::post('/users/{id}/update', [AdminController::class, 'updateUser'])
        ->name('admin.users.update');

    // 🔐 Reset password
    Route::post('/users/{id}/reset-password', [AdminController::class, 'resetUserPassword'])
        ->name('admin.users.reset-password');

    // 🗑 Delete user
    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])
        ->name('admin.users.delete');

});
