<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
// use Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('role', function(){
        // $user = \Auth::user();
        // if($user->hasrole('editor')){
        //     dd('editor');
        // }
    });
});

Route::group(['middleware' => ['auth', 'role:editor']], function(){
    Route::get('role', function(){
        dd('Hi');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
