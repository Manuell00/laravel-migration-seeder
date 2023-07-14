<?php

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

// Dico al file web.php dove trovare ModelMovie cotroller
use App\Http\Controllers\Guest\PageController as PageController;

// Lo indichiamo nella rotta
Route::get('/', [PageController::class, 'index']);
