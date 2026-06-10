<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangDBController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table keranjang
    	//$keranjang = DB::table('keranjang')->get();

        // mengambil data dari table keranjang dengan pagination
        $keranjang = DB::table('keranjangbelanja')->get();

    	// mengirim data keranjang ke view index
    	return view('keranjang.keranjang',['keranjang' => $keranjang]);
    }
    // method untuk menampilkan view form tambah keranjang
	public function tambah()
	{
		// memanggil view tambah
		return view('keranjang.tambah');
	}
	// method untuk insert data ke table keranjang
	public function store(Request $request)
	{
		// insert data ke table keranjang
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjang
		return redirect('/keranjang');
	}
	// method untuk hapus data keranjang
	public function hapus($id)
	{
		// menghapus data keranjang berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$id)->delete();
		// alihkan halaman ke halaman keranjang
		return redirect('/keranjang');
	}
}
