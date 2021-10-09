<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table ="proyecto";
    protected $primaryKey ="IdProyecto";
    public $timestamps = false;

    public function usuarios(){
        return $this ->belongsToMany('App\Usuario','EncargadoProyecto','IdProyectoFK','IdUsuarioFK','IdProyecto','IdUsuario','IdEncargado'); 
    }

    public function Actividades(){
        return $this -> hasMany('App\Actividades','IdProyectoFK');
    }
}
