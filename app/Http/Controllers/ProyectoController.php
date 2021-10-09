<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

use App\Http\Requests\ProyectoRequest;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(6);
        return view ('proyecto.indexproyecto')
        ->with("proyectos",$proyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Proyecto.createProyecto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {
<<<<<<< HEAD

        $reglas=[
            "codigo"=> 'required|max:10',
            "nombre"=> 'required|max:25',
            "fechae"=> 'required',
            "fechar"=> 'required'

        ];

        $mensajes = [
            "required"=>"Campo requerido",
            "alpha"=>"solo letras",
            "max"=>"Debe tener maximo : :max caracteres"
        ];
        $validador =Validator::make($request->all(),$reglas,$mensajes);



        if ($validador->fails()){

            return redirect ('proyecto/create')->withErrors($validador)




            ->withInput();
        }




=======
        
>>>>>>> fbe5ae87513e3253ebf60be067110414d9be4948
        //crear el nuevo recurso clienteDB::delete('delete users where name = ?', ['John'])
        $nuevoproyecto = new Proyecto();
        $nuevoproyecto->CodigoProyecto = $request->input("codigo");
        $nuevoproyecto->NombreProyecto = $request->input("nombre");
        $nuevoproyecto->FechaRealizacion = $request->input("fechar");
        $nuevoproyecto->FechaEntrega = $request->input("fechae");


        $nuevoproyecto->save();
     //redireccionamiento  a una ruta especifica

     return redirect ('proyecto')->with('Creado','Se ha creado exitosamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto =Proyecto::find($id);
        return view('proyecto.verProyecto')
        ->with("proyecto",$proyecto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyecto.editProyecto')->with('proyecto',$proyecto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyectoRequest $request, $id)
    {
<<<<<<< HEAD
        $reglas=[
            "codigo"=> 'required|alpha|max:10',
            "nombre"=> 'required|alpha|max:10',
            "fechae"=> 'required',
            "fechar"=> 'required'

        ];

        $mensajes = [
            "required"=>"Campo requerido",
            "alpha"=>"solo letras",
            "max"=>"Debe tener maximo : :max caracteres"
        ];

        $validador =Validator::make($request->all(),$reglas,$mensajes);



        if ($validador->fails()){

            return redirect ("proyecto/$id/edit")
            ->withErrors($validador)




            ->withInput();
        }
=======
      
      
>>>>>>> fbe5ae87513e3253ebf60be067110414d9be4948

        $proyecto= Proyecto::find($id);
        //actualizar el estado del recurso
        //en virtud de los datos que vengan de los formularios

        $proyecto->CodigoProyecto = $request->input("codigo");
        $proyecto->NombreProyecto = $request->input("nombre");
        $proyecto->FechaRealizacion = $request->input("fechar");
        $proyecto->FechaEntrega = $request->input("fechae");
        $proyecto->save();
        return redirect("proyecto")
        ->with("mensaje", "Proyecto actualizado");
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
