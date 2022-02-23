<?php

use App\Http\controllers\BiodataController;
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

Route::get('/home',[Homecontroller::class,'showgreating']);

Route::get('/biodata', function () {
    $data=[
        'nama'=> 'Muhammad Rifqi',
        'lahir'=> 'Ci anjur,06-02-2004',
        'hobi' => 'Tidur',
        'jk' => 'Laki - Laki',
        'agama' => 'ISLAM',
        'alamat' => 'Rancaekek',
        'telp' => '08XXXXXXXXX',
        'email' => 'rm65416111@gmail.com ',
        'photo' => 'img/yyy.jpg'
    ];
     return view('/biodata', $data);
});

Route::get('/list',[BiodataController::class,'index'])->name('list');
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit_siswa');
Route::get('/add_siswa', [BiodataController::class, 'create'])->name('add-siswa');
Route::post('/store_siswa',[BiodataController::class, 'store'])->name('store_siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update_siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
