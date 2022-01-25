<?php

use App\Http\Controllers\CholloController;
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

Route::get("crear", [CholloController::class, "crear"])->name("crear");
Route::post("crearChollo",[CholloController::class, "crearChollo"])->name("crearChollo");
Route::get("infoChollo/{id?}", [CholloController::class, "informacion"])->name("chollos.infoChollo");
