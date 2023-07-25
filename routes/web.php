<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VotingController;

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

Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/pemilsos', [AdminController::class, 'index']);
Route::get('/pemilsos/dpt/delete/{id}', [AdminController::class, 'dptdelete']);
Route::get('/pemilsos/delete/all', [AdminController::class, 'deleteall']);
Route::get('/pemilsos/user', [AdminController::class, 'pemilsosuser']);

//data kelas
Route::get('/pemilsos/datakelas', [AdminController::class, 'datakelas']);
Route::get('/datakelas/post', [AdminController::class, 'adddatakelas']);
Route::get('/datakelas/del/{id}', [AdminController::class, 'deldatakelas']);

//data calon
Route::get('/pemilsos/datacalon', [AdminController::class, 'datacalon']);
Route::post('/datacalon/post', [AdminController::class, 'adddatacalon']);
Route::get('/datacalon/del/{id}', [AdminController::class, 'deldatacalon']);
Route::get('/datacalon/edit/{id}', [AdminController::class, 'editdatacalon']);
Route::post('/datacalon/edit/post/{id}', [AdminController::class, 'postdatacalon']);

//data dpt
Route::get('/pemilsos/datadpt', [AdminController::class, 'datadpt']);
Route::post('/datadpt/post', [AdminController::class, 'adddatadpt']);

//hasil vote
Route::get('/pemilsos/hasilvote', [AdminController::class, 'hasilvote']);
// Route::get('/pemilsos/hasilvote', [AdminController::class, 'countdpt']);

//daftar hadir
Route::get('/pemilsos/daftarhadir', [AdminController::class, 'daftarhadir']);

//vote
Route::get('/pemilsos/vote/{id}', [VotingController::class, 'vote']);
Route::get('/pemilsos/gagal', [AdminController::class, 'gagal']);
Route::get('/pemilsos/succes', [AdminController::class, 'success']);
