 @extends('templatepegawai')
    @section('judul_halaman' ,'Data Unggas')
    @section('konten')
<p>
	<br/><a href="/unggas/tambah" class="btn btn-primary"> Tambah Unggas Baru</a>
</p>
<p>Cari Data Unggas :</p>
	<form action="/unggas/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Unggas .." class="form-control">
		<input type="submit" value="CARI" class="btn btn-success mt-2">
	</form>

	<br/>

	<table class="table table-striped table-hover">
    <tr>
        <th>Kode Unggas</th>
        <th>Nama Unggas</th>
        <th>Jumlah Unggas</th>
        <th>Status Ketersediaan</th>
        <th>Opsi</th>
    </tr>

    @foreach($unggas as $u)
    <tr>
        <td>{{ $u->kodeunggas }}</td>
        <td>{{ $u->namaunggas }}</td>
        <td>{{ $u->jumlahunggas }}</td>

        <td>
            @if($u->tersedia == 'Y')
                Tersedia
            @else
                Tidak Tersedia
            @endif
        </td>

        <td>
            <a href="/unggas/edit/{{ $u->kodeunggas }}" class="btn btn-warning">
                Edit
            </a>
            |
            <a href="/unggas/hapus/{{ $u->kodeunggas }}" class="btn btn-danger">
                Hapus
            </a>
        </td>
    </tr>
    @endforeach
</table>
    @endsection
