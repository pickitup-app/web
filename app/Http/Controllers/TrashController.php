<?php

namespace App\Http\Controllers;

use App\Models\Trash;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Trash with its order
        $trashes = Trash::with('order')->get();
        return view('dashboard.trashinfo',compact('trashes'));
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
    public function show(Trash $trash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trash $trash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatetrash(Trash $trash)
    {
        return view('dashboard.updatetrash',compact('trash'));
    }

    public function updateaction(Request $request, Trash $trash)
    {
        $trash->category = request('category');
        $trash->weight = request('weight');
        $trash->point = request('point');
        $trash->save();

        $user = $trash->order->user;
        $user->point = $user->point += $trash->point;
        $user->save();
        return redirect('/trashinfo');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trash $trash)
    {
        //
    }
}
