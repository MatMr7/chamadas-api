<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlunoController;
use App\Http\Controllers\Admin\ProfessorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Professor\TurmaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('/', [AdminController::class, 'create']);
        Route::post('/professor', [ProfessorController::class, 'create']);
        Route::post('/aluno', [AlunoController::class, 'create']);
    });

    Route::prefix('professor')->group(function () {
        Route::post('/turma', [TurmaController::class, 'create']);
    });
});

