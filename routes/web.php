<?php

use App\Http\Controllers\LinkController;
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
    return view('home', [
        'url' => 'http://url.faizrashid.my.id/'
    ]);
});

Route::post('/', [LinkController::class, 'store']);

Route::get('/{link:alias}', [LinkController::class, 'show']);
