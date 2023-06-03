<?php

namespace App\Http\Controllers;

use App\Models\Kosts;
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
        Kosts::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('admin_index');
    }

    public function view_edit_kosts($id)
    {
        $product = Kosts::find($id);
        return view('admin.edit', compact('product'));
    }

    // ------------------------ end kosts ---------------------------------



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
