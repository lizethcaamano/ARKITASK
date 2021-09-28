<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposTrabajo extends Model
{
    protected $table = "grupotrabajo";
    protected $primaryKey="IdGrupo";
    public $timestamps= false;
}
