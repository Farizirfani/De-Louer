@extends('layouts.app')

@section('content')
    <div class="card-1 card-1 m-4 p-4">
        <form method="POST" action="{{ route('create_rooms', $data_rooms->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control-file" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Ruangan</label>
                <input type="text" name="nama_room" id="nama_room" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="price">Harga</label>
                <input class="form-control" type="text" name="price" id="price" required>
            </div>
            <div class="mb-3">
                <label for="capacity" class="form-label">Kapasitas</label>
                <input class="form-control" type="number" name="capacity" id="capacity" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
