
<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/routing');

// Halaman Bootstrap Clone
Route::get('/bootstrap', function () {
    return view('bootstrap');
});

// Routing
Route::get('/routing', function () {
    return view('routing');
});

Route::get('/basic_routing', function() {
    return 'Hello World';
});

Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'Nurul Widad']);

Route::get('/controller_route', [RouteController::class, 'index']);

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/user_optional/{name?}', function ($name = 'Tamu') {
    return 'Nama saya ' . $name;
});

// 4.7 Regular Expression Constraints
Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

// 4.8 Named Route
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

// Route Priority
Route::get('/route_priority/user', function() {
    return "This is Route 1";
});

Route::get('/route_priority/user', function() {
    return "This is Route 2";
});

// Route Groups
Route::prefix('admin')->name('admin.')->group(function() {

    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');

    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');

    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');

});

// Fallback Route (harus paling bawah)
Route::fallback(function() {
    return 'This is Fallback Route';
});
