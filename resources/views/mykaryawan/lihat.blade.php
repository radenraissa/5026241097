@extends('template')
@section('title', 'Kode Soal Mykaryawan')
@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($mykaryawan as $k)
    <div class="card">
        <div class="card-header">
            Page Melihat Karyawan
        </div>

        <div class="card-body">
            <form class="form-horizontal">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <div class="form-control-plaintext" id="kodepegawai">{{ $k->kodepegawai }}</div>
                    </div>
                </div>

                 <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <div class="form-control-plaintext" id="namalengkap">{{ ucwords(strtolower($k->namalengkap)) }}</div>
                </div>


                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <div class="form-control-plaintext" id="divisi">{{ $k->divisi }}</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <div class="form-control-plaintext" id="departemen">{{ $k->departemen }}</div>
                    </div>
                </div>

    

            </form>
        </div>
    </div>
 @endforeach
@endsection