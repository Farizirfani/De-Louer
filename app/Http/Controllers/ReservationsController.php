<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservations::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        // Logic for create reservation form
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Reservations::create($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully');
    }

    public function show($id)
    {
        $reservation = Reservations::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservations::findOrFail($id);
        // Logic for edit reservation form
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'room_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $reservation = Reservations::findOrFail($id);
        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully');
    }

    public function destroy($id)
    {
        $reservation = Reservations::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully');
    }
}
