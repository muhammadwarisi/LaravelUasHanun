@extends('layout/aplikasi')

@section('konten')
<a href="/kopi" class="btn btn-secondary"><< Kembali</a>

<form method="POST" action="{{ '/kopi/'.$data->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <h1>NIS : {{ $data->id }}</h1>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Kopi</label>
        <input type="text" class="form-control" name="nama_kopi" id="nama_kopi" value="{{ $data->nama_kopi }}">
      </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Jenis Kopi</label>
        <input type="text" class="form-control" name="jenis_kopi" id="nama" value="{{ $data->jenis_kopi }}">
      </div>
      <div class="col-md">
        <div class="form-floating">
          <select class="form-select" name="cabang_toko">
            <option value="{{$data->cabang_toko}}" name="cabang_toko">{{$data->cabang_toko}}</option>
            <option value="Malang" name="cabang_toko">Malang</option>
            <option value="Wajak" name="cabang_toko">Wajak</option>
            <option value="Pasuruan" name="cabang_toko">Pasuruan</option>
          </select>
          <label for="floatingSelectGrid">Pilih Cabang</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <textarea class="form-control" name="asal_kopi">{{ $data->asal_kopi }}</textarea>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
</form>
@endsection
