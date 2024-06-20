@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href="/kopi" class="btn btn-secondary">Kembali</a>
        <h1>ini Kopi : {{ $data->nama_kopi }}</h1>
        <p>
            <b>Jenis : </b>{{ $data->jenis_kopi }}
        </p>
        <p>
            <b>Asal Kopi : </b>{{ $data->asal_kopi }}
        </p>
        <p>
            <b>Alamat : </b>{{ $data->cabang_toko }}
        </p>

    </div>
@endsection
