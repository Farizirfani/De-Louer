@extends('layouts.app')

@section('content')
    <h1>ini dari Rooms edit</h1>
    <div class="container">
        <div class="card-1 m-4 p-3">
            <form method="POST" action="{{ route('edit_rooms', $rooms_edit->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="kosts_id" value="{{ $rooms_edit->kosts_id }}">

                <div class="mb-3">
                    <label class="form-label">Nama Room</label>
                    <input type="text" name="nama_room" value="{{ $rooms_edit->nama_room }}" class="form-control">
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label">Tambah Foto</label>
                    <input type="file" name="image" value="{{ $product->image }}" class="form-control">
                </div> --}}
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" value="{{ $rooms_edit->price }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Capacity</label>
                    <input type="number" name="capacity" value="{{ $rooms_edit->capacity }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
