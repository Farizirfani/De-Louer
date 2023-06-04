<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Reservations;
use App\Models\Rooms;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create_reservation(Request $request, $id)
    {

        // $room = $request->input('room_id');
        // dd($room);

        // $request->validate([
        //     'room_id' => 'required|exists:rooms,id',
        //     'user_id' => 'nullable|exists:users,id',
        //     'lama_menginap' => 'required|integer|min:1',
        //     'total_harga' => 'required|numeric|min:0',
        // ]);

        // Reservations::create([
        //     'room_id' => $request->room_id,
        //     'user_id' => $request->user_id,
        //     'lama_menginap' => $request->lama_menginap,
        //     'total_harga' => $request->total_harga,
        // ]);

        $room_id = Rooms::find($request->input('room_id'));
        $harga = $room_id->price;
        $lm = $room_id->capacity - $request->input('lama_menginap');

        if ($lm < 0) {
            return redirect()->back()->with('error', 'Maaf Kapasitas yang diminta tidak mencukupi');
        }
        $room_id->capacity = $lm;
        $room_id->update();

        $reservations = new Reservations();
        $reservations->room_id = $room_id->id;
        $reservations->user_id = Auth::user()->id;
        $reservations->lama_menginap = $request->input('lama_menginap');
        $reservations->total_harga = $request->input('lama_menginap') * $harga;


        $reservations->save();
        // dd($reservations);

        return redirect()->route('home')->with('success', 'Reservation created successfully');
    }

    public function destroy($id)
    {
        // $reservation = Reservations::findOrFail($id);
        // $reservation->delete();

        // return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully');
    }
}
