@extends('layouts.app')

@section('content')
    <h1>testing ini dari create rooms</h1>

    <form method="POST" action="{{ route('create_rooms', $data_rooms->id) }}">
        @csrf

        <div>
            <label for="name">Nama Ruangan</label>
            <input type="text" name="nama_room" id="nama_room" required>
        </div>

        <div>
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" required>
        </div>

        <div>
            <label for="capacity">Kapasitas</label>
            <input type="number" name="capacity" id="capacity" required>
        </div>

        <button type="submit">Simpan</button>
    </form>
@endsection
