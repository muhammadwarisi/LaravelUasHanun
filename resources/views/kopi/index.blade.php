@extends('layout/aplikasi')

@section('konten')
<div class="container mt-5 pt-5">
    <a href="/sesi/logout" class="btn btn-info"><< Logout</a>
<a href="/kopi/create" class="btn btn-secondary">+Tambah Data Kopi</a>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nama Kopi</th>
                <th>Jenis Kopi</th>
                <th>Asal Kopi</th>
                <th>Cabang Saat Ini</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nama_kopi }}</td>
                    <td>{{ $item->jenis_kopi }}</td>
                    <td>{{ $item->asal_kopi }}</td>
                    <td>{{ $item->cabangtoko }}</td>
                    <td>
                    <a class="btn btn-secondary btn-sm" href="{{ url('/kopi/'. $item->id) }}">Detail</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('/kopi/'. $item->id.'/edit') }}">Edit</a>
                    <form onsubmit="return confirm('Yakin Mau hapus Data')" action="{{ '/kopi/'.$item->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Del</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
