<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnggasDBController extends Controller
{
    // Menampilkan data unggas
    public function index()
    {
        $unggas = DB::table('unggas')->paginate(10);

        return view('unggasdb', ['unggas' => $unggas]);
    }

    // Form tambah unggas
    public function tambah()
    {
        return view('tambahunggas');
    }

    // Simpan data unggas
    public function store(Request $request)
    {
        DB::table('unggas')->insert([
            'namaunggas' => $request->namaunggas,
            'jumlahunggas' => $request->jumlahunggas,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/unggas');
    }

    // Form edit unggas
    public function edit($id)
    {
        $unggas = DB::table('unggas')
            ->where('kodeunggas', $id)
            ->get();

        return view('editunggas', ['unggas' => $unggas]);
    }

    // Update data unggas
    public function update(Request $request)
    {
        DB::table('unggas')
            ->where('kodeunggas', $request->id)
            ->update([
                'namaunggas' => $request->namaunggas,
                'jumlahunggas' => $request->jumlahunggas,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/unggas');
    }

    // Hapus data unggas
    public function hapus($id)
    {
        DB::table('unggas')
            ->where('kodeunggas', $id)
            ->delete();

        return redirect('/unggas');
    }

    // Cari data unggas
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $unggas = DB::table('unggas')
            ->where('namaunggas', 'like', "%" . $cari . "%")
            ->paginate();

        return view('unggasdb', ['unggas' => $unggas]);
    }
}
