<?php

namespace App\Http\Controllers;

use App\Models\Kosts;
use App\Models\Rooms;
use Illuminate\Http\Request;

class KostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        // $detail_kosts = Kosts::find($id);
        // return view('pages.user.kosts.detailKosts', compact('detail_kosts', 'rooms'));

        $detail_kosts = Kosts::with('rooms')->findOrFail($id);
        return view('pages.user.kosts.detailKosts', compact('detail_kosts'));
    }


    // public function

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
