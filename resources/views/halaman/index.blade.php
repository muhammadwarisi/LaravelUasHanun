@extends('layout.aplikasi')

@section('konten')
<div class="container text-center">
    <h1>Kopi Yang Tersedia Hari Ini</h1>
    <p>Luangkan Waktumu Untuk ngopi Hari Ini</p>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nama kopi</th>
                <th>Jenis Kopi</th>
                <th>Asal kopi</th>
                <th>Cabang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nama_kopi }}</td>
                    <td>{{ $item->jenis_kopi }}</td>
                    <td>{{ $item->asal_kopi }}</td>
                    <td>{{ $item->cabang_toko}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
