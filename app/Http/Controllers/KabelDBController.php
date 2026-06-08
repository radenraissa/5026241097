<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KabelDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //jika tampilan hasil bukan pagination
		$kabel = DB::table('kabel')->paginate(10);
    	// mengirim data kabel ke view index
    	return view('indexkabel',['kabel' => $kabel]);


    }

	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambahkabel');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kabel')->insert([
			'merkkabel' => $request->merk,
			'stockkabel' => $request->stock,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kabel');
 
	}
 
	// method untuk edit data kabel
	public function edit($id)
	{
		// mengambil data kabel berdasarkan id yang dipilih
		$kabel = DB::table('kabel')->where('kodekabel',$id)->get();
		// passing data kabel yang didapat ke view edit.blade.php
		return view('editkabel',['kabel' => $kabel]);
 
	}
 
	// update data kabel
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('kabel')->where('kodekabel',$request->id)->update([
			'merkkabel' => $request->merk,
			'stockkabel' => $request->stock,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman kabel
		return redirect('/kabel');
	}
 
	// method untuk hapus data kabel
	public function hapus($id)
	{
		// menghapus data kabel berdasarkan id yang dipilih
		DB::table('kabel')->where('kodekabel',$id)->delete();
		
		// alihkan halaman ke halaman kabel
		return redirect('/kabel');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;
		$kabel = DB::table('kabel')
		->where('merkkabel','like',"%".$cari."%")
		->paginate();
 
		return view('indexkabel',['kabel' => $kabel]);
	}
}
