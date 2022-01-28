<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GoogleController;
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



// public

Route::get('/', function () {
    return view('public.indexPublic');
})->name('home');
Route::get('index', function () {
    return view('public.indexPublic');
});

Route::get('detailService', function () {
    return view('public.detailService');
});
Route::get('detailCatalogue', function () {
    return view('public.detailCatalogue');
});
Route::get('detail_authors', function () {
    return view('public.detail_authors');
});
Route::get('catalogue', function () {
    return view('public.catalogue');
});


Route::get('about', function () {
    return view('public.about');
});


// login & register


Route::get('login', function () {
    return view('public.loginPage');
})->name('login');


Route::post('login', [LoginController::class, 'login']);

Route::get('register', function () {
    return view('public.register');
});

Route::post('register', [RegisterController::class, 'store']);

Route::post("/logout", function () {
    Auth::logout();
    session()->regenerate();
    return redirect('/');
})->middleware('auth');

Route::get('catalogue', function () {
    return view('public.catalogue');
});


// Google auth login

Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});


//-------------------
//users
Route::get('indexUsers', function () {
    return view('users.indexUsers');
});

Route::get('accountUsers', function () {
    return view('users.accountUsers');
});

Route::get('becomePartners', function () {
    return view('users.becomePartners');
});
Route::get('catalogueUsers', function () {
    return view('users.catalogueUsers');
});
Route::get('aboutUsers', function () {
    return view('users.aboutUsers');
});
Route::get('detailServiceUsers', function () {
    return view('users.detailServiceUsers');
});
Route::get('detailCatalogueUser', function () {
    return view('users.detailCatalogueUsers');
});

//--------------------




//admin sidebar

Route::get('dashboard', function () {
    return view('admin.dashboard.dashboard');
});

//partners

Route::get('partners', function () {
    return view('admin.partners.partners');
});
Route::get('addpartners', function () {
    return view('admin.partners.addpartners');
});

//event
Route::get('events', function () {
    return view('admin.events.events');
});
Route::get('addevents', function () {
    return view('admin.events.addevents');
});

//news
Route::get('news', function () {
    return view('admin.news.news');
});
Route::get('addnews', function () {
    return view('admin.news.addnews');
});

//users

Route::get('users', function () {
    return view('admin.users.users');
});

//services

Route::get('services', function () {
    return view('admin.services.services');
});

Route::get('addservices', function () {
    return view('admin.services.addservices');
});

//accounts

Route::get('accounts', function () {
    return view('admin.accounts.accounts');
});

Route::get('addaccounts', function () {
    return view('admin.accounts.addaccounts');
});
