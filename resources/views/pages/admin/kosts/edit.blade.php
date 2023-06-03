@extends('layouts.app')

@section('content')
    <h1>ini dari kosts edit</h1>
    <div class="container">
        <div class="card-1 m-4 p-3">
            <form method="POST" action="{{ route('edit_kosts', $edit_kosts->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $edit_kosts->name }}" class="form-control">
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label">Tambah Foto</label>
                    <input type="file" name="image" value="{{ $product->image }}" class="form-control">
                </div> --}}
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" value="{{ $edit_kosts->address }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" value="{{ $edit_kosts->description }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
