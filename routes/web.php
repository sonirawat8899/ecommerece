<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Redirect use for the display Admin dashboard and user dashabord 
Route::get('/redirect',[HomeController::class,'redirect']);

//dashboard
// Route::get('/view_dashboard',[AdminController::class,'view_dashboard']);

//Add cotegry
// Route::get('/view_catagory',[AdminController::class,'view_catagory']);
// Route::post('/add_catagory',[AdminController::class,'add_catagory']);


// Route::get('/view_product',[AdminController::class,'view_product']);