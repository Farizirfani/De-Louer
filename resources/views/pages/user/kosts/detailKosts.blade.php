@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            <br>
            <h2 style="font-weight: 600" class="my-3">Hai, Silahkan Cari Room yang sesuai!</h2>
            <div class="card-1 py-2 px-4 d-flex justify-content-center">
                <div class="m-1 col">
                    <h5 class="color-1">Location</h5>
                    <h5 style="font-weight: 500" class="color-3">Jakarta | Indonesia</h5>
                </div>
                <div class="m-1 col">
                    <h5 class="color-1">Kosts</h5>
                    <h5 style="font-weight: 500" class="color-3">{{ $detail_kosts->name }}</h5>
                </div>
                <div class="m-1 col">
                    <h5 class="color-1">Recent Type</h5>
                    <h5 style="font-weight: 500" class="color-3">Room</h5>
                </div>
                <div>
                    <div class="btn bg-color-1">
                        testing
                    </div>
                </div>
            </div>
            <div class="card-body bg-white p-4 my-5 shadow-lg rounded d-flex">
                <div class="p-2">
                    <img style="width: 550px; height: 350px;"
                        class="rounded mx-2"src="{{ asset('images/' . $detail_kosts->image) }}" alt="images">
                </div>
                <div>
                    <br>
                    <br>
                    <h1 class="color-1" style="font-weight: 700">Nama Kosts: {{ $detail_kosts->name }}</h1>
                    <br>
                    <h2 class="color-3">Address: {{ $detail_kosts->address }}</h2>
                    <br>
                    <h3 class="color-3">Description: {{ $detail_kosts->description }}</h3>
                </div>
            </div>
            <div class="my-5 d-flex">
                @foreach ($detail_kosts->rooms as $item)
                    <div class="card bg-white rounded shadow m-4" style="width: 20rem;">
                        <img width="20rem" height="250px" src="{{ asset('images-room/' . $item->image) }}"
                            class="card-img-top" alt="Images-room">
                        <div class="p-4">
                            <h2 class="color-1">Room: {{ $item->nama_room }}</h2>
                            <h5 style="font-weight: 600" class="card-text">Harga: Rp.{{ $item->price }} /Month</h5>
                            <h5 class="card-text color-3">Capacity: {{ $item->capacity }}</h5>
                            <a href="{{ route('room.show', $item->id) }}" class="btn btn-primary">Lihat Detail Kosts</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- </div> --}}
        </div>
    </div>
@endsection
