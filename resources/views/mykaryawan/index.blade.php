@extends('template')
@section('title', 'Kode Soal Mykaryawan')
@section('konten')


    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>View</th>
        </tr>
        
        @foreach ($mykaryawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ ucwords(strtolower($k->namalengkap)) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ $k->departemen }}</td>
                <td>
                    <a href="/eas/lihat/{{ $k->kodepegawai }}" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
        @endforeach
    </table>
                    
@endsection