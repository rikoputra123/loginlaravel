<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Siswa;
use App\Migrations;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', [RegisterController::class, "index"]);
Route::post('/register', [RegisterController::class, "store"]);

Route::get('/create', function () {
    return view('create', [
        'siswa' => Siswa::all()
    ]);
});

Route::get('/edit/{siswa}', function (Siswa $siswa) {
    return view('edit', [
        'siswa' => $siswa::all()
    ]);

});
Route::get('/inputdata', function (Siswa $siswa) {
    return view('inputdata',[
        'siswa' => $siswa::all()
    ]);
});
//route CRUD
Route::get('/pegawai','PegawaiController@index');