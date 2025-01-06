<?php

use Illuminate\Support\Facades\Route;

Route::get('/budidaya-sorgum', function () {
    return view('budidaya_sorgum');
});
use Illuminate\Http\Request;

Route::post('/submit-data', function (Request $request) {
    // Validasi data
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'telepon' => 'required|string|max:15',
        'jenis_kelamin' => 'required|string',
        'alamat' => 'required|string',
    ]);

    // Simpan data ke database (contoh hanya untuk ilustrasi)
    \DB::table('petani')->insert($validated);

    return redirect('/budidaya-sorgum')->with('success', 'Data berhasil disimpan!');
});

