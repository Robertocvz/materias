<?php

namespace App\Http\Controllers;

use App\Models\materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MateriaController;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['materias']=materia::paginate(5);
        return view('materia.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosmateria=request()->except('_token');
        materia::insert($datosmateria);
        return response()->json($datosmateria);
    }

    /**
     * Display the specified resource.
     */
    public function show(materias $materias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $materia=materia::findOrFail($id);
        return view('materia/edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosmateria=request()->except('_token','_method');

        materia::where('id','=',$id)->update($datosmateria);

        $materia=materia::findOrFail($id);
        return view('materia/edit', compact('materia'));

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $materia=materia::findOrFail($id);
        materia::destroy($id);

        return redirect('materia');

    }
}
