<?php

namespace App\Http\Controllers;

use App\Models\Kosts;
use App\Models\Rooms;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kosts = Kosts::all();
        // $data_rooms = Kosts::all();
        return view('pages.admin.index', compact('data_kosts'));
    }


    // ------------------------ Kosts -----------------------

    public function view_create_kosts()
    {
        return view('pages.admin.kosts.create');
    }

    public function create_kosts(Request $request)
    {
        // Kosts::create([
        //     'name' => $request->input('name'),
        //     'address' => $request->input('address'),
        //     'description' => $request->input('description'),
        // ]);

        // $request->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'description' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $imageName = time() . '.' . $request->image->extension();

        // $request->image->move(public_path('images'), $imageName);

        // Kosts::create([
        //     'name' => $request->name,
        //     'address' => $request->address,
        //     'description' => $request->description,
        //     'image' => $imageName,
        // ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $kosts = new Kosts();
        $kosts->name = $request->name;
        $kosts->address = $request->address;
        $kosts->description = $request->description;
        $kosts->image = $imageName;
        $kosts->save();
        // dd($kosts);


        return redirect()->route('admin_index');
    }

    public function view_edit_kosts($id)
    {
        $edit_kosts = Kosts::find($id);
        return view('pages.admin.kosts.edit', compact('edit_kosts'));
    }

    public function edit_kosts(Request $request, $id)
    {
        $edit_kosts = Kosts::find($id);
        $edit_kosts->name = $request->name;
        $edit_kosts->address = $request->address;
        $edit_kosts->description = $request->description;
        $edit_kosts->save();

        return redirect()->route('admin_index');
    }

    public function destroy_kosts($id)
    {
        Kosts::destroy($id);
        return redirect()->route('admin_index');
    }

    // ------------------------ end kosts ---------------------------------

    // ----------------------- Rooms --------------------------------------

    public function view_index_rooms($id)
    {
        $data_rooms = Kosts::with('rooms')->findOrFail($id);
        return view('pages.admin.rooms.index', compact('data_rooms'));
    }

    public function view_create_rooms($id)
    {
        // $data_rooms = Rooms::find($id);

        $data_rooms = Kosts::where('id', $id)->first();
        // dd($data_rooms);
        return view('pages.admin.rooms.create', compact('data_rooms'));
    }

    public function create_rooms(Request $request, $id)
    {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images-room'), $imageName);

        $kosts_id = Kosts::find($id);

        $room = new Rooms;
        $room->kosts_id = $kosts_id->id;
        $room->nama_room = $request->input('nama_room');
        $room->price = $request->input('price');
        $room->capacity = $request->input('capacity');
        $room->image = $imageName;

        // dd($room);
        $room->save();

        return redirect()->route('admin_index');
    }

    public function view_edit_rooms($id)
    {

        // $edit_kosts = Kosts::find($id);
        // return view('pages.admin.kosts.edit', compact('edit_kosts'));

        $rooms_edit = Rooms::find($id);
        return view('pages.admin.rooms.edit', compact('rooms_edit'));
    }

    public function edit_rooms(Request $request, $id)
    {
        $edit_kosts = Rooms::find($id);
        $edit_kosts->kosts_id = $request->input('kosts_id');
        $edit_kosts->nama_room = $request->nama_room;
        $edit_kosts->price = $request->price;
        $edit_kosts->capacity = $request->capacity;

        $edit_kosts->save();

        return redirect()->route('admin_index');
    }

    public function destroy_rooms($id)
    {
        Rooms::destroy($id);
        return redirect()->route('admin_index');
    }

    // ----------------------- ende Rooms ---------------------------------


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
