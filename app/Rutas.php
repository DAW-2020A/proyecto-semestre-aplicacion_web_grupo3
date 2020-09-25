<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    protected $fillable=['name','units_number'];
    public function unidades()
    {
        return $this->hasMany('App\Unidad');
    }
    public function rutasbusstop()
    {
        return $this->hasMany('App\RutasBusstop');
    }
}
