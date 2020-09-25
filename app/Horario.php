<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable=['type','start','end'];
    public function rutasbusstop()
    {
        return $this->belongsTo('App\RutasBusstop');
    }
}
