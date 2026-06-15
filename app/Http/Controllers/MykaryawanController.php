<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MykaryawanController extends Controller
{
     public function index()
    {
        $mykaryawan = DB::table('mykaryawan')->get();
        return view('mykaryawan.index', ['mykaryawan' => $mykaryawan]);
    }

 
	public function lihat($kodepegawai)
    {
        // untuk melihat satu record 
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->get();
        return view('mykaryawan.lihat', ['mykaryawan' => $mykaryawan]);
    }
	
}
