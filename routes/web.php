<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', \App\Http\Livewire\Home::class)->name('home');
Route::get('category/{slug}', \App\Http\Livewire\ServicesByCategory::class)->name('category');
Route::get('service/{slug}', \App\Http\Livewire\ServiceDetail::class)->name('detail');

//    Search
Route::get('search/{search}', \App\Http\Livewire\Search::class)->name('search');


//User Pages
Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', \App\Http\Livewire\User\Dashboard::class)->name('user.dashboard');

//Admin Pages
Route::prefix('admin')->middleware(['adminCheck', 'auth:sanctum', 'verified'])->group(function () {
    Route::get('dashboard', \App\Http\Livewire\Admin\Dashboard::class)->name('admin.dashboard');

//    Category CRUD
    Route::get('category', \App\Http\Livewire\Admin\Category::class)->name('admin.category');
    Route::get('category/create', \App\Http\Livewire\Admin\NewCategory::class)->name('admin.catNew');
    Route::get('category/update/{slug}', \App\Http\Livewire\Admin\UpdateCategory::class)->name('admin.catUpdate');
    Route::get('category/service/{slug}', \App\Http\Livewire\Admin\CategoryServices::class)->name('admin.catService');
//  Services CRUD
    Route::get('service', \App\Http\Livewire\Admin\Service::class)->name('admin.serv');
    Route::get('service/create', \App\Http\Livewire\Admin\NewService::class)->name('admin.servNew');
    Route::get('service/update/{slug}', \App\Http\Livewire\Admin\UpdateService::class)->name('admin.servUpdate');


//    Slider Manage Admin
    Route::get('slider', \App\Http\Livewire\Admin\Slider::class)->name('admin.slider');
    Route::get('slider/create', \App\Http\Livewire\Admin\NewSlider::class)->name('admin.slideNew');
    Route::get('slider/update/{id}', \App\Http\Livewire\Admin\UpdateSlider::class)->name('admin.slideUpdate');

//    Profile management
    Route::get('profile', \App\Http\Livewire\Admin\Profile::class)->name('admin.profile');
    Route::get('profile/update', \App\Http\Livewire\Admin\UpdateProfile::class)->name('admin.profUpdate');



});



Route::get('test',[\App\Http\Controllers\TestJson::class,'index'])->name('test');











