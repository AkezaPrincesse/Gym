
<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/getdoc', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

// Auth::routes();

// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Login routes
//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Registration routes
Route::get('/signup', [RegistrationController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegistrationController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

