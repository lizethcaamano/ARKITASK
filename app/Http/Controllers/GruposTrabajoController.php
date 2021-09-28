<?php

namespace App\Http\Controllers;

use App\GruposTrabajo;
use Illuminate\Http\Request;

class GruposTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = GruposTrabajo::paginate(10);

        return view('MolduloGruposTrabajo.Listado')->with('grupos', $grupos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MolduloGruposTrabajo.Crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupo = new GruposTrabajo();

        $grupo -> CodigoGrupo = $request -> input('codigo');
        $grupo -> FechaInicio = $request -> input('inicio');
        $grupo -> FechaDesactivacion = $request -> input('desactivacion');
        $grupo -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupo= GruposTrabajo::find($id);

        return view('MolduloGruposTrabajo.Detalles')->with('grupo', $grupo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = GruposTrabajo::find($id);

        return view('MolduloGruposTrabajo.Editar')->with('grupo', $grupo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grupo = GruposTrabajo::find($id);

        $grupo -> CodigoGrupo = $request -> input('codigo');
        $grupo -> FechaInicio = $request -> input('inicio');
        $grupo -> FechaDesactivacion = $request -> input('desactivacion');
        $grupo -> save();

        return redirect('grupos')->with('actualizado', 'El grupo se ha actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
