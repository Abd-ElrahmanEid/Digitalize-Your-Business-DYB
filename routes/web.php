<?php

use App\Http\Controllers\admin\AdminservicesController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//  Contact Us page
Route::get('contactus',function (){
    return view('contactus');
});


// portfolio page
Route::get('portfolio',function (){
    return view('portfolio');
});


// portfolio page
Route::get('request',function (){
    return view('request');
});



//admin page
Route::get('admin',function (){
    return view('admin.home');
})->middleware(['Admin','auth']);





Route::get('/dashboard', function () {
    if (auth()->user()->is_admin){
        return redirect('admin');
    }else{
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //admin add service,view the services requested by client, delete, update
    Route::resource('adminservice', AdminservicesController::class)->middleware('Admin');
    //admin view,add,delete users
    Route::resource('adminusers', UserController::class)->middleware('Admin');
    Route::resource('userview', UserviewController::class);
});

require __DIR__.'/auth.php';

