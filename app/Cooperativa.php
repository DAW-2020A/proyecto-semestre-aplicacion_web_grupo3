<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    protected $fillable=['name','logo','direction','phone','mail'];

    public function unidades()
    {
        return $this->hasMany('App\Unidad');
    }
}
