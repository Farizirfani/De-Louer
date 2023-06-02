<?php

namespace App\Http\Controllers;

use App\Models\Kosts;
use Illuminate\Http\Request;

class KostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.kosts.addKosts');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kost = Kosts::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kosts $kosts)
    {
        return view('pages.kosts.detailKosts');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kosts $kosts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kosts $kosts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kosts $kosts)
    {
        //
    }
}
