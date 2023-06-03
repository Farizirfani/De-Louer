@extends('layouts.app')

@section('content')
    <div>
        <h1 class="text-center">hello world ini dari index admin</h1>
        <div class="container">
            <a class="btn btn-primary" href="{{ route('admin_create_kosts') }}">Create New Kosts</a>
            <div class="card-1 m-4 p-3">
                <h3 class="text-center">Product</h3>
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Image</th>
                            <th>Nama Kosts</th>
                            <th>Alamat</th>
                            <th>description</th>
                            <th>create room</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data_kosts as $dk)
                            <tr class="text-center">
                                <th class="text-center">{{ $no++ }}</th>
                                <td class="text-center">
                                    <img style="max-width: 80px" src="{{ asset('images/' . $dk->image) }}"
                                        alt="Foto Product">
                                </td>
                                <td class="text-center">{{ $dk->name }}</td>
                                <td class="text-center">{{ $dk->address }}</td>
                                <td class="text-center">{{ $dk->description }}</td>
                                <td class="text-center"><a class="btn btn-primary"
                                        href="{{ route('admin_create_rooms', $dk->id) }}">New Room</a>
                                </td>
                                <td class="tex-center">
                                    <div class="d-flex justify-content-center">
                                        {{-- <form action="" class="m-1">
                                            <a href="{{ route('admin.edit', $dk->id) }}" class="btn btn-warning"
                                                href="">Edit</a>
                                        </form>
                                        <form action="{{ route('admin.destroy', $dk->id) }}" method="POST" class="m-1">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
