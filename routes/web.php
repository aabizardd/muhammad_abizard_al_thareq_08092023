<?php

use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('soal1');
});

// Route::get('/soal2', function () {

//     $all_data = Pegawai::all();

//     $data = [
//         'all_data' => $all_data
//     ];

//     return view('table_pegawai', $data);
// });

Route::prefix('soal2')->group(function () {
    Route::get('/', [App\Http\Controllers\SoalPrakterkController::class, 'index'])->name('soal2');

    Route::get('delete/{id}', [App\Http\Controllers\SoalPrakterkController::class, 'destroy'])->name('soal2.destroy');

    // Route::post('updatePassword', [App\Http\Controllers\ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    // Route::post('uploadIdentitas', [App\Http\Controllers\ProfileController::class, 'uploadIdentitas'])->name('profile.uploadIdentitas');
});

// Route::prefix('monitoring')->group(function () {
//     Route::get('/', [App\Http\Controllers\MonitoringController::class, 'index'])->name('monitoring');
// });