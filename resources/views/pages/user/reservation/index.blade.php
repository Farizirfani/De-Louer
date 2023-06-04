@extends('layouts.app');

@section('content')
    <form action="{{ route('reservations_store') }}" method="POST">
        @csrf
        <label for="room_id">Room:</label>
        <select name="room_id" id="room_id">
            @foreach ($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->name }}</option>
            @endforeach
        </select>

        <!-- Jika user_id diperlukan -->
        {{-- <label for="user_id">User:</label>
    <select name="user_id" id="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select> --}}

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required>

        <button type="submit">Create Reservation</button>
    </form>
@endsection
