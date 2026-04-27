<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SebetController;
Route::get('/sebet', [SebetController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/sebet', function () {
    return view('sebet');
});
Route::get('/', function () {
    return view('reve_page'); 
});

Route::get('/kudo-menu', function () {
    // Eger faýlyň ady kudo_menu.blade.php bolsa:
    return view('kudo_menu'); 
})->name('kudo.index');

