<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $catagory = Catagory::orderby('id','desc')->paginate(5);
        return view('catagory.index',compact('catagory'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $validated = $request->validate([
            'name' => 'required',
        ]);
        Catagory::create($validated);
        return redirect()->route('catagory.admin.index')
            ->with('success','catégorie ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catagory $catagory)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catagory $catagory)
    {
        //
        return view('catagory.edit',compact('catagory'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagory $catagory)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $catagory->update($validated);
        return redirect()->route('catagory.admin.index')
            ->with('success','catégorie modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagory $catagory)
    {
        //
        $catagory->delete();
        return redirect()->route('catagory.admin.index')
            ->with('success','catégorie supprimé avec succès !');
    }
}
