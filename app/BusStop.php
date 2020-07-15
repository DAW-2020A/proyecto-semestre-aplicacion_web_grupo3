<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusStop extends Model
{
    protected $fillable =['name','direction','longitude','latitude'];
}
