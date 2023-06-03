@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Hello Selamat datang di De'Louer</h1>
        <h2 class="text-center">Silahkan Pilih Kostan dan room nya, enjoy to sleep</h2>
        <br>
        <br>
        <h3>Pilih Kostan impian mu dibawah ini sekarang ya!...</h3>
        <a href=""></a>
        @foreach ($data_kosts as $item)
            <div class="card-1 bg-white p-4 my-4 shadow-lg rounded">
                <img src=src="{{ asset('images/' . $item->image) }}" alt="images">
                <h1>{{ $item->name }}</h1>
                <h2>{{ $item->address }}</h2>
                <h2>{{ $item->description }}</h2>
                <a href="{{ route('kosts.show', $item->id) }}" class="btn btn-primary">Lihat Detail Kosts</a>
            </div>
        @endforeach
    </div>
@endsection
