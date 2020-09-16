<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable =['placa','unit_number'];

    public function cooperativa()
    {
       return $this->belongsTo('App\Cooperativa');
    }
    public function drivers()
    {
        return $this->hasOne('App\Drivers');
    }
}
