@extends('layouts.app')

@section('content')
    <div>
        <h1>ini dari index rooms</h1>
        <div class="card-1 p-4">
            <div class="my-1">
                <a class="btn btn-primary text-white" href="{{ route('admin_create_rooms', $data_rooms->id) }}">New Room
                </a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Image</th>
                        <th>Id Kosts</th>
                        <th>Nama Rooms</th>
                        <th>Price</th>
                        <th>Capacity</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data_rooms->rooms as $item)
                        <tr class="text-center">
                            <th class="text-center">{{ $no++ }}</th>
                            <td class="text-center">
                                {{-- <img style="max-width: 80px" src="{{ asset('images/' . $item->image) }}" alt="Foto Product"> --}}
                            </td>
                            <td class="text-center">{{ $item->kosts_id }}</td>
                            <td class="text-center">{{ $item->nama_room }}</td>
                            <td class="text-center">{{ $item->price }}</td>
                            <td class="text-center">{{ $item->capacity }}</td>
                            <td class="tex-center">
                                <div class="d-flex justify-content-center">
                                    <form action="" class="m-1">
                                        <a href="{{ route('view_edit_rooms', $item->id) }}"
                                            class="btn btn-warning text-white" href="">Edit</a>
                                    </form>
                                    <form action="{{ route('destroy_rooms', $item->id) }}" method="POST" class="m-1">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
