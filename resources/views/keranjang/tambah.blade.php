@extends('templatepegawai')
@section('judul_halaman', 'Data Kerjanjang')
@section('konten')

<p>
<br></br><a href="/keranjang" class="btn btn-secondary mb-4">Kembali</a>
</p>
    <div class="card">
        <div class="card-header">
            Form Tambah Data Keranjang
        </div>

        <div class="card-body">
            <form action="/keranjang/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodebarang" id="kodebarang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga per item</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" id="harga" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Beli" class="btn btn-secondary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
