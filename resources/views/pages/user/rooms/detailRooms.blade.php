@extends('layouts.app')

@section('content')
    <div>
        <h1>ini dari detail rooms</h1>
        <h1>{{ $detail_room->nama_room }}</h1>
        <img style="max-width: 250px" src="{{ asset('images-room/' . $detail_room->image) }}" alt="Foto Product">
        {{-- <h1></h1> --}}

        {{-- ----------------------- --}}
        <h1>Reservasi sekarang</h1>
        <form action="{{ route('create_reservation', $detail_room->id) }}" method="POST">
            @csrf
            <input name="room_id" value="{{ $detail_room->id }} " hidden />
            <input name="capacity" value="{{ $detail_room->capacity }}  " hidden />
            <h1 for="harga">Harga: {{ $detail_room->price }} / Bulan</h1>

            <h1 for="lama_menginap">Lama Menginap:
                <input type="number" min="1" name="lama_menginap">Bulan
            </h1>
            <button type="submit">Create Reservation</button>
        </form>
    </div>
@endsection
