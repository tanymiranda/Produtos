<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\prodController;
use \App\Http\Controllers\IndexController;

Route::get('/', IndexController::class);

Route:: get('/produtos/novo',[prodController::class,'index']);

Route:: get('/produtos',[prodController::class, 'show']);

Route::post('/produtos',[prodController::class, 'store']);

Route:: put('/produtos', [prodController::class, 'save']);

Route::get('/produtos/edita', [prodController::class, 'edit']);

Route::get('/produtos/sucesso', function () {
    return view('sav');
});