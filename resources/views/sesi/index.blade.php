@extends('layout/aplikasi')

@section('konten')
<a href="/sesi/login" class="btn btn-secondary">Kembali</a>
    <div class="w-50 border rounded px-3 py-3 mx-auto mt-5">
        <h1>Login</h1>
        <form action="/sesi/login/" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Passwrod</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>
    <form action="/sesi/register" method="POST" >
    <div class="mb-3 d-grid">
        <button name="submit" class="btn btn-success" type="submit"><a href="/sesi/register" class="text-decoration-none text-white">Register</a></button>
    </div>
</form>
    </div>

@endsection
