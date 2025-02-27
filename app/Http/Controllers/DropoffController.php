<?php

namespace App\Http\Controllers;

use App\Models\Dropoff;
use Illuminate\Http\Request;

class DropoffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dropoffs = Dropoff::all();
        return view('dashboard.dropoffpoint', compact('dropoffs'));
        // return view('dashboard.dropoffpoint');
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
        $dropoff = new Dropoff;
        $dropoff->name = request('name');
        $dropoff->address = request('address');
        $dropoff->save();
        return redirect('/dropoffpoint');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dropoff $dropoff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dropoff $dropoff)
    {
        return view('dashboard.editdop', compact('dropoff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dropoff $dropoff)
    {
        $dropoff->name = request('name');
        $dropoff->address = request('address');
        $dropoff->save();
        return redirect('/dropoffpoint');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dropoff $dropoff)
    {
        $dropoff->delete();
        return redirect('/dropoffpoint');
    }
}
