<?php

use App\Http\Controllers\Admin\AjustesController;
use App\Http\Controllers\Admin\CatalogoController;
use App\Http\Controllers\Admin\InventarioController;
use App\Http\Controllers\Admin\PersonasController;
use App\Http\Controllers\Admin\ProyectosController;
use App\Http\Controllers\Admin\ReportesController;
use Illuminate\Support\Facades\Route;

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


Route::get('/solicitud', function () {
    return view('so_empleo');
});

Route::get('/cotizaciones', function () {
    return view('cotizaciones');
});
Route::get('/portafolio', function () {
    return view('portafolio');
});



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    //Personas
    Route::get ('personas/admin', [PersonasController::class, 'index_admin'])->name('personas/admin');
    Route::get ('personas/clien', [PersonasController::class, 'index_clien'])->name('personas/clien');
    Route::get ('personas/emplea', [PersonasController::class, 'index_emplea'])->name('personas/emplea');
    Route::get ('personas/provee', [PersonasController::class, 'index_provee'])->name('personas/provee');
    
    //Catalogo
    Route::get ('cat/hogar', [CatalogoController::class, 'index_hogar'])->name('cat/hogar');
    Route::get ('cat/comerc', [CatalogoController::class, 'index_comerc'])->name('cat/comerc');
    Route::get ('cat/ofic', [CatalogoController::class, 'index_ofic'])->name('cat/ofic');

    //Inventario
    Route::get ('Inv/cat', [InventarioController::class, 'index_categoria'])->name('Inv/cat');
    Route::get ('Inv/maq&equip', [InventarioController::class, 'index_maquinaria_equipo'])->name('Inv/maq&equip');
    //Proyectos
    Route::get ('proj/act', [ProyectosController::class, 'index_Pactuales'])->name('proj/act');
    Route::get ('proj/sempl', [ProyectosController::class, 'index_Sempl'])->name('proj/sempl');
    Route::get ('proj/cot', [ProyectosController::class, 'index_Cot'])->name('proj/cot');
    //Reportes 
    Route::get ('reportes/personas', [ReportesController::class, 'index_person'])->name('reportes/personas');
    Route::get ('reportes/inventario', [ReportesController::class, 'index_inv'])->name('reportes/inventario');
    Route::get ('reportes/proyectos', [ReportesController::class, 'index_Proj'])->name('reportes/proyectos');
    //Ajuestes
    Route::get ('ajustes', [AjustesController::class, 'index_ajustes'])->name('ajustes');
    Route::get ('ajustes/roles', [AjustesController::class, 'index_Roles'])->name('ajustes/roles');
    Route::get ('ajustes/bitacora', [AjustesController::class, 'index_Bitacora'])->name('ajustes/bitacora');
    Route::get ('ajustes/backup', [AjustesController::class, 'index_backup'])->name('ajustes/backup');
});