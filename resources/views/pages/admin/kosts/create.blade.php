@extends('layouts.app')


@section('content')
    <div>
        <h1>Testing ini dari add Kosts</h1>
        <br>

        <form method="POST" action="{{ route('create.kosts') }}">
            @csrf

            <div>
                <label for="name">Nama Kost</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div>
                <label for="address">Alamat</label>
                <input type="text" name="address" id="address" required>
            </div>

            <div>
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" required></textarea>
            </div>

            <button type="submit">Simpan</button>
        </form>

    </div>
@endsection
