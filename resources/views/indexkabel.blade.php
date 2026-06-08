@extends('template')
@section('title', 'Data Kabel')
@section('konten')
    <a href="/kabel/tambah" class="btn btn-primary">Tambah Kabel Baru</a>

    <br />
    <br />

	<form action="/kabel/cari" method="GET">
		<div class="form-group">
			<label>Cari Data Kabel :</label>
			<input type="text" name="cari" placeholder="Cari Merk Kabel .." class="form-control">
			<input type="submit" value="CARI" class="btn btn-light">
		</div>
	</form>
		
	<br/>

    <table border="table" class="table table-bordered table-striped table-hover">
        <tr>
            <th>Merk Kabel</th>
            <th>Stock Kabel</th>
            <th>Tersedia (Y/N)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($kabel as $k)
            <tr>
                <td>{{ $k->merkkabel }}</td>
                <td>{{ $k->stockkabel }}</td>
                <td>{{ $k->tersedia }}</td>
                <td>
                    <a href="/kabel/edit/{{ $k->kodekabel }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/kabel/hapus/{{ $k->kodekabel }}" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
	{{ $kabel->links() }}
@endsection