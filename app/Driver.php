<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['name','last_name','cellphone','phone','direction','mail','date'];
    public function cooperativa()
    {
        return $this->belongsTo('App\Cooperativa');
    }
    public function unidad()
    {
        return $this->hasOne('App\Unidad');
    }

}
