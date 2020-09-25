<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RutasBusstop extends Model
{
    protected $fillable = [];
    public function rutas()
    {
        return $this->belongsTo('App\Rutas');
    }
    public function busstop()
    {
        return $this->belongsTo('App\BusStop');
    }
    public function horario()
    {
        return $this->hasMany('App\Horario');
    }
}
