@extends('layouts.app')

@section('content')
    <div class="bg-home">
        <div class="container py-5">
            <div class="row">
                <div class="col justify-center align-content-center p-2">
                    <br>
                    <br>
                    <h1 class="" style="font-weight: 800;">Bonjour, Selàmat datang di De'Louer</h1>
                    <h3 class="" style="font-weight: 300">Silahkan Pilih Kostan dan room nya, enjoy to sleep</h3>
                    <h5 class="" style="font-weight: 300">Pilih Kostan impian mu dibawah ini sekarang ya!...</h5>
                </div>
                <div class="col">
                    <img style="max-width: 500px" src="{{ 'img/luxury-classic-banner.png' }}" alt="banner-image">
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="d-flex justify-content-center">
                <div class="bg-white rounded-pill px-3 py-2 m-2">
                    <h4 class="color-1">Murah</h4>
                </div>
                <div class="bg-white rounded-pill px-3 py-2 m-2">
                    <h4 class="color-1">Nyaman</h4>
                </div>
                <div class="bg-white rounded-pill px-3 py-2 m-2">
                    <h4 class="color-1">Strategis</h4>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <div class="container py-5">
        <div class="d-flex justify-content-between">
            <div class="col">
                <h5 class="color-1 py-4" style="font-weight: 600;">WHO WE ARE</h5>
                <h2 class="">Website Untuk para pencari kosts yang nyaman dan murah</h2>
                <h5 class="color-2" style="font-weight: 500">Donec porttitor euismod dignissim. Nullam a lacinia ipsum,
                    nec dignissim purus. Nulla
                    convallis ipsum
                </h5>
                <div class="card-1 p-4 m-3">
                    <h5 class="color-1" style="font-weight: 600">Judul</h5>
                    <p class="color-2">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-1 p-4 m-3">
                    <h5 class="color-1" style="font-weight: 600">Judul</h5>
                    <p class="color-2">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col py-5">
                <img style="max-width: 280px" src="{{ 'img/img-1.png' }}" alt="banner-image">
                <img style="max-width: 280px" src="{{ 'img/img-2.png' }}" alt="banner-image">
            </div>
        </div>
    </div>
    <div class="bg-1 p-4" style="height: 500px">
        <h1 class="text-center py-4">Lorem ipsum dolor sit amet.</h1>
        <div class="d-flex justify-content-center py-2">
            <div class="card-1 p-4 mx-3 text-center w-25">
                <i class="fa-solid fa-magnifying-glass color-1 py-4"></i>
                <h5>Search a comfort room</h5>
                <h6 class="color-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet
                    consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, numquam?</h6>
            </div>
            <div class="card-1 p-4 mx-3 text-center w-25">
                <i class="fa-solid fa-magnifying-glass color-1 py-4"></i>
                <h5>Search a comfort room</h5>
                <h6 class="color-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet
                    consectetur.</h6>
            </div>
            <div class="card-1 p-4 mx-3 text-center w-25">
                <i class="fa-solid fa-magnifying-glass color-1 py-4"></i>
                <h5>Search a comfort room</h5>
                <h6 class="color-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet
                    consectetur.</h6>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <h5 class="color-1 py-4" style="font-weight: 600;">Let's See</h5>
        <h2 class="" style="font-weight: 800">Kosts</h2>
        <div>
            @foreach ($data_kosts as $item)
                <div class="card-1 bg-white p-4 my-4 shadow-lg rounded">
                    <div class="d-flex">
                        <div class="bg-light m-2">
                            <img style="width: 250px; height: 250px;" class="rounded mx-2"
                                src="{{ asset('images/' . $item->image) }}" alt="images">
                            {{-- <img style="max-width: 80px" src="{{ asset('images/' . $dk->image) }}"alt="Foto Product"> --}}
                        </div>
                        <div>
                            <h1>{{ $item->name }}</h1>
                            <h2>{{ $item->address }}</h2>
                            <h2>{{ $item->description }}</h2>
                            <a href="{{ route('kosts.show', $item->id) }}" class="btn btn-primary">Lihat Detail Kosts</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
