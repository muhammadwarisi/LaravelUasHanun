@extends('layout/aplikasi')

@section('konten')
<a href="/kopi" class="btn btn-secondary">Kembali</a>
<form method="POST" action="/kopi" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nama_kopi" class="form-label">Nama Kopi</label>
      <input type="text" class="form-control" name="nama_kopi" id="nis" placeholder="Tuliskan Nama Kopinya">
    </div>
    <div class="mb-3">
      <label for="jenis_kopi" class="form-label">Jenis Kopi</label>
      <input type="text" class="form-control" name="jenis_kopi" id="jenis_kopi" placeholder="torabika">
    </div>
    <div class="col-md">
        <div class="form-floating">
          <select class="form-select" name="cabang_toko">
            <option value="Malang" name="cabang_toko">Malang</option>
            <option value="Wajak" name="cabang_toko">Wajak</option>
            <option value="Pasuruan" name="cabang_toko">Pasuruan</option>
          </select>
          <label for="floatingSelectGrid">Cabang Toko</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="asal_kopi" class="form-label">Asal Kopi</label>
        <textarea class="form-control" name="asal_kopi" placeholder="Kepanjen"></textarea>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
@endsection
