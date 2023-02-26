<?php

use App\Http\Controllers\job\jobController;
use App\Http\Controllers\langController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\homeController;
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
    return view('job.index');
})->name('index');

Route::get('job_detail/{id}', [jobController::class , 'job_details'] )->name('job_detail');

Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('categories', function () {
        return view('admin.categories');
    })->name('categories');
});

Route::middleware(['auth','role:fournisseur'])->name('fournisseur.')->prefix('is-admin')->group(function() {
    Route::get('/', function () {
        return view('company.index');
    })->name('index');
    Route::get('/company', function () {
        return view('company.company');
    })->name('company');
    Route::get('/mes-annonces', function () {
        return view('company.annonces.index');
    })->name('annonces.index');

});
Route::middleware(['auth','role:user'])->name('user.')->prefix('user')->group(function() {
    Route::get('/' , [homeController::class , 'index' ])->name('index');
    Route::get('profile' , [homeController::class , 'profile' ])->name('profile');
    Route::get('edit_profile' , [homeController::class , 'edit_profile' ])->name('profile.edit');
    Route::post('update_profile' , [homeController::class , 'update_profile' ])->name('profile.update');
    Route::post('apply_job' , [jobController::class , 'apply_job' ])->name('apply_job');
});



Route::get('lang', [langController::class,'change'])->name('changeLang');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
