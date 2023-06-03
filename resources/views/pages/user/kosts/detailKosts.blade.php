@extends('layouts.app')

@section('content')
    <div>
        <h1 class="text-center">ini dari detail kosts</h1>
        <div class="container">
            <div class="card-body bg-white p-4 my-4 shadow-lg rounded">
                <img src=src="{{ asset('images/' . $detail_kosts->image) }}" alt="images">
                <h1>{{ $detail_kosts->name }}</h1>
                <h2>{{ $detail_kosts->address }}</h2>
                <h2>{{ $detail_kosts->description }}</h2>
                <div class="my-4">
                    @foreach ($detail_kosts->rooms as $item)
                        <div class="bg-info rounded p-4 text-white shadow-sm">
                            <img src=src="{{ asset('images/' . $item) }}" alt="images">
                            <h1>{{ $item->nama_room }}</h1>
                            <h1>{{ $item->price }}</h1>
                            <h1>{{ $item->capacity }}</h1>
                            <a href="{{ route('room.show', $item->id) }}" class="btn btn-primary">Lihat Detail Kosts</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
