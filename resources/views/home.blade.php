@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Hello Selamat datang di De'Louer</h1>
        <h2 class="text-center">Silahkan Pilih Kostan dan room nya, enjoy to sleep</h2>
        <br>
        <br>
        <h3>Pilih Kostan impian mu dibawah ini sekarang ya!...</h3>
        @foreach ($data_kosts as $item)
            <div class="card-body bg-white p-4 shadow-lg rounded">
                <img src=src="{{ asset('images/' . $item->image) }}" alt="">
                <h1>{{ $item->name }}</h1>
                <h2>{{ $item->address }}</h2>
                <h2>{{ $item->description }}</h2>
            </div>
        @endforeach
    </div>
@endsection
