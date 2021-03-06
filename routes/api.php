<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('usuarios')->group(function()
{
    Route::put('/crear', [PersonasController::class, 'crear']);
    Route::delete('/borrar', [PersonasController::class, 'borrar']);
    Route::post('/modificar', [PersonasController::class, 'modificar']);
    Route::get('/listar', [PersonasController::class, 'listar']);
    Route::get('/ver', [PersonasController::class, 'ver']);
});

