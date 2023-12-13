<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HelloController;
use App\Http\Controllers\Api\BandController;

Route::get('bands', [BandController::class, 'getAll'] );
Route::post('bands/store', [BandController::class, 'store'] );
Route::get('bands/{id}', [BandController::class, 'getById'] );
Route::get('bands/gender/{gender_id}', [BandController::class, 'getByGenderId'] );

Route::post('hello/{name}', [HelloController::class, 'hello']);
Route::get('hello/{name}', [HelloController::class, 'foobar']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
