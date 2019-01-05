<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function () {
    return view('site.home');
})->name('home');


//For Only Admin Access...
Route::middleware('role:admin')->prefix('/admin')->group(function () {

    Route::get('/', function () {
        return view('site.home');
    });

});

