<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Actividades extends Model
{
    protected $table = "actividades";
    protected $primaryKey = "IdActividad";
    public $timestamps = false;


    public function ArchivoSolucion(){

        return -> HasMany('App\Entregables','IdActividadesFK')
    }
}
