<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table = "catalogo";
    protected $primaryKey="IdCatalogo";
    public $timestamps= false;

    public function Proyecto(){

        return -> HasMany('App\Proyecto','IdCatalogoFK');
    }

    public function Imagen(){

        return -> HasMany('App\Imagen','IdCatalogoFK');
    }

}
