<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Colegio;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
        return view('aulas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colegios = Colegio::all();
    return view ('aulas.create', compact('colegios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aula  = new Aula();
        $aula->nombre = $request->nombre;    
        $aula->capacidad = $request->capacidad;
        $aula->foto = $request->foto;
        $aula->colegio_id = $request->input('colegio_id');
        $aula->save();

        return redirect()->route('aulas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aula $aula)
    {
        return view('aulas.show', compact('aula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        
        $aula = Aula::find($id);
        $colegios = Colegio::all();

        return view('aulas.edit', compact('aula', 'colegios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aula $id)
    {
     
        $aula = Aula::findOrFail($id);
        $aula->nombre = $request->nombre;
        $aula->capacidad = $request->capacidad;
        
        
        $aula->foto = $request->foto;
        $aula->colegio_id = $request->input('colegio_id');
        $aula->save();

        return redirect()->route('aulas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aula $id)
    {
        $aula = Aula::find($id);
        $aula->delete();
        return redirect()->route('aulas.index');
    }
}

