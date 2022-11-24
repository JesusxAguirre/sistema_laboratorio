<?php

use App\Http\Controllers\CitologiaUrinariaController;
use App\Http\Controllers\DescarteController;
use App\Http\Controllers\FrotisController;
use App\Http\Controllers\Hematologia;
use App\Http\Controllers\HematologiaController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\QuimicaController;
use App\Http\Controllers\UrianalisisController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
/*
 Route::middleware(['auth:sanctum', 'verified'])->get('/pacientes', function () {

    $pacientes = Pacientes::all(); 

    return Inertia::render('Pacientes',compact('pacientes'));
})->name('pacientes.index');
 */


Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/pacientes', PacientesController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/hematologia', HematologiaController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/Descarte', DescarteController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/Frotis', FrotisController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/hematologiac', Hematologia::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/quimica', QuimicaController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/urianalisis', UrianalisisController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/citologiaurinaria', CitologiaUrinariaController::class);

Route::get('hematologia', [PacientesController::class, 'hematologia'])
->name('report');

Route::get('felino', [PacientesController::class, 'felina'])
->name('report');

Route::get('equino', [PacientesController::class, 'equino'])
->name('report');

