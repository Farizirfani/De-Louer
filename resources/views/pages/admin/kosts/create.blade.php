@extends('layouts.app')

@section('content')
    <div class="card-1 card-1 m-4 p-4">
        <form method="POST" action="{{ route('create_kosts') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kost</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label or="address" class="form-label">Alamat</label>
                <input class="form-control" type="text" name="address" id="address" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">Deskripsi</label>
                <textarea class="form-control" name="description" id="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
