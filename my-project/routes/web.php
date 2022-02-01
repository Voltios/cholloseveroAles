<?php

use App\Http\Controllers\CholloController;
use App\Http\Controllers\UserController;
use App\Models\Chollo;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('main');
// });


Route::get("/", [CholloController::class, "main"])->name("main");

Route::get("crear", [UserController::class, "crear"])->name("crear");

Route::post("crearChollo", [UserController::class, "crearChollo"])->name("crearChollo");

Route::get("infoChollo/{id?}", [CholloController::class, "informacion"])->where("id", "[0-9]+")->name("infoChollo");

Route::delete("eliminar/{id}", [UserController::class, "borrar"])->name("eliminar");

Route::get("editar/{id}", [UserController::class, "editar"])->name("editar");
Route::put("editar/{id}", [UserController::class, "actualizar"])->name("actualizar");

Route::get("cbd", [CholloController::class, "cbd"])->name("cbd");
Route::get("lsd", [CholloController::class, "lsd"])->name("lsd");
Route::get("oxd", [CholloController::class, "oxd"])->name("oxd");
Route::get("mda", [CholloController::class, "mda"])->name("mda");
Route::get("ben", [CholloController::class, "ben"])->name("ben");
Route::get("mrf", [CholloController::class, "mrf"])->name("mrf");
Route::get("psc", [CholloController::class, "psc"])->name("psc");
Route::get("destacados", [CholloController::class, "destacados"])->name("destacados");
Route::get("nuevos", [CholloController::class, "nuevos"])->name("nuevos");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
