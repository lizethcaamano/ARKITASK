<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table ="proyecto";
    protected $primaryKey ="IdProyecto";
    public $timestamps = false;
}
