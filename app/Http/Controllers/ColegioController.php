<?php

namespace App\Http\Controllers;

use App\Models\Colegio;
use Illuminate\Http\Request;

class ColegioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   
    {
        $colegios = Colegio::all();
        return view('colegios.index', compact('colegios'));

        return view('colegios.index');
    
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view ('colegios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $colegio  = new Colegio();
        $colegio->nombre = $request->nombre;    
        $colegio->direccion = $request->direccion;
        $colegio->telefono = $request->telefono;
        $colegio->email = $request->email;
        $colegio->foto = $request->foto;
        $colegio->save();

        return redirect()->route('colegios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colegio $colegio)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $colegio = Colegio::find($id);

        return view('colegios.edit', compact('colegio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colegio $id)
    {
        $colegio = Colegio::findOrFail($id);
        $colegio->nombre = $request->nombre;
        $colegio->direccion = $request->direccion;
        $colegio->telefono = $request->telefono;
        $colegio->email = $request->email;
        //$colegio->foto = $request->foto;
        $colegio->save();

        return redirect()->route('colegios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colegio $id)
    {
        $colegio = Colegio::find($id);
        $colegio->delete();
        return redirect()->route('colegios.index');
        
    }
}
