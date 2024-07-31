<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\ObatModel;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('obat.home');

Route::get('/create', function () {
    return view('create');
});

Route::delete('destroy/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('obat.del');

Route::post('home', [ HomeController::class, 'create']
)->name('obat.create');

Route::get('/edit/{id}', [HomeController::class,'edit'])->name('obat.edit');

Route::put('/update{id}', [HomeController::class,'update'])->name('obat.update');

Route::get('/show/{id}', [HomeController::class, 'show'])->name('obat.show');

Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');