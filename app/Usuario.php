<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table ="usuario";
    protected $primaryKey ="IdUsuario";
    public $timestamps = false;

    // relacion de uno a muchos 
public function asistencia(){

    return $this-> HasMany('App\Asistencia', 'IdUsuarioFK');  
} 

public function actividades(){

    return $this -> HasMany('App\Actividades','IdUsuarioFk')
}

public function proyecto()
return $this -> HasMany('App\Proyecto','IdUsuarioFK')


}
