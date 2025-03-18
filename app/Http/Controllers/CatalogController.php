<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
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
        // dd($request);
        $catalog = new Catalog;
        $catalog->title = $request->title;
        $catalog->description = $request->description;
        $catalog->points = $request->points;

        // Process image path using storage
        $path = $request->file('logo')->store('images','public');
        $catalog->logo = $path;

        $catalog->termsandconditions = $request->termsandconditions;
        $catalog->howtoredeem = $request->howtoredeem;

        $catalog->save();

        return redirect('/reward');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catalog $catalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catalog $catalog)
    {
        $catalog->title = $request->title;
        $catalog->description = $request->description;
        $catalog->points = $request->points;

        // Process image path using storage
        $path = $request->file('logo')->store('images','public');
        $catalog->logo = $path;

        $catalog->termsandconditions = $request->termsandconditions;
        $catalog->howtoredeem = $request->howtoredeem;

        $catalog->save();

        return redirect('/reward');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catalog $catalog)
    {
        // Delete image from storage
        Storage::delete('public/'.$catalog->logo);
        $catalog->delete();
    

        return redirect('/reward');
    }

    public function reward(){
        $catalogs = Catalog::all();
        return view('dashboard.reward', compact('catalogs'));
    }

    public function updatecatalog(Catalog $catalog){
        return view('dashboard.updatecatalog', compact('catalog'));
    }
}
