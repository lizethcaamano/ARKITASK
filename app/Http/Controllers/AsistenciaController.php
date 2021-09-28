<?php

namespace App\Http\Controllers;

use App\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias = Asistencia::paginate(10);

        return view('ModuloAsistencia.Listado')->with('asistencias', $asistencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ModuloAsistencia.Crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Iniciamos proceso para crear una nueva asistencia */

        $asistencianew = new Asistencia();

        $asistencianew -> FechaHoraIngreso= $request -> input('ingreso');
        $asistencianew -> FechaHoraSalida= $request -> input('salida');
        $asistencianew -> IdUsuarioFK= $request -> input('empleado');
        $asistencianew ->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);

        return view('ModuloAsistencia.Detalles')->with('asistencia', $asistencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = Asistencia::find($id);

        return view('ModuloAsistencia.Editar')->with('asistencia',$asistencia);
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
        $asistencia = Asistencia::find($id);



        $asistencia -> FechaHoraIngreso= $request -> input('ingreso');
        $asistencia -> FechaHoraSalida= $request -> input('salida');
        $asistencia -> IdUsuarioFK= $request -> input('empleado');
        $asistencia ->save();

        return redirect('asistencia')->with('Actualizado', 'La asistencia ha sido actualizada :)');
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
