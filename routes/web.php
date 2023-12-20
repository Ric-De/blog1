<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

//This is the final clean way to do the routes using the controllers.

Route::get('/',HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');

});

/* Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']); */



/* Route::get('/', function () {
    //return view('welcome');
    return "Bienvenido a la pagina principal";
}); */

/* Route::get('cursos', function () {
    return "Bienvenido a la pagina cursos";
});

Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});

Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso: $curso";
}); */

//Good route. But all this logic with if and else need to be inside a controller. Need to create a controller to do that.
/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
        return "Bienvenido al curso $curso de la categoria $categoria";
    } else{
        return "Bienvenido al curso: $curso";
    }
}); */


