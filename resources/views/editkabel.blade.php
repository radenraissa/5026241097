@extends('template')
@section('title', 'Data Kabel')
@section('konten')
 
<a href="/kabel" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($kabel as $k)

    <div class="card">
        <div class="card-header">
            Form Edit Data Kabel
        </div>

        <div class="card-body">
            <form action="/kabel/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $k->kodekabel }}">

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk Kabel</label>
                    <div class="col-sm-10">
                        <input type="text" name="merk" id="merk" class="form-control" required value="{{ $k->merkkabel }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stock Kabel</label>
                    <div class="col-sm-10">
                        <input type="number" name="stock" id="stock" class="form-control" required value="{{ $k->stock }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia (Y/N)</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $k->tersedia == 'Y' ? 'selected' : '' }}>Y (Ya, Tersedia)</option>
                            <option value="N" {{ $k->tersedia == 'N' ? 'selected' : '' }}>N (Tidak Tersedia)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endforeach

@endsection