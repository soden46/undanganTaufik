<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/comment', function (Request $request) {
    // Validasi data yang diterima dari permintaan
    $request->validate([
        'nama' => 'required|max:35',
        'hadir' => 'required|boolean',
        'komentar' => 'required',
    ]);

    // Simpan data ke dalam database
    $ucapan = new Ucapan();
    $ucapan->nama = $request->nama;
    $ucapan->hadir = $request->hadir;
    $ucapan->komentar = $request->komentar;
    $ucapan->save();

    // Jika berhasil disimpan, kirim respons sukses
    return response()->json(['message' => 'Data ucapan berhasil disimpan'], 201);
});
