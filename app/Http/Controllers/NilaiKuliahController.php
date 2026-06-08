<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel nilaikuliah
        $nilai = DB::table('nilaikuliah')->get();
        return view('indexnilai', ['nilai' => $nilai]);
    }

    public function tambah()
    {
        // Menampilkan form tambah data
        return view('tambahnilai');
    }

    public function store(Request $request)
    {
        // Insert data ke tabel nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilai_angka,
            'SKS' => $request->sks
        ]);
        
        // Redirect kembali ke halaman index nilai
        return redirect('/nilaikuliah');
    }
}