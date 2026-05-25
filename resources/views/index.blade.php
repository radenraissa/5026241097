@extends('template')
@section('title', 'Data Pegawai')
@section('konten')
    <a href="/pegawai/tambah" class="btn btn-primary">Tambah Pegawai Baru</a>

    <br />
    <br />

	
	<form action="/pegawai/cari" method="GET">
		<div class="form-group">
			<label>Cari Data Pegawai :</label>
			<input type="text" name="cari" placeholder="Cari Pegawai .." class="form-control">
			<input type="submit" value="CARI" class="btn btn-light">
		</div>
	</form>
		
	<br/>

    <table border="table" class="table table-bordered table-striped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-sm btn-warning">Edit</a>
                     
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
	{{ $pegawai->links() }}
@endsection
