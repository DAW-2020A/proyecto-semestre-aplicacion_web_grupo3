<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterestPoint extends Model
{
    protected $fillable=['name','direction','phone','hour_start','hour_end','latitude','longitude'];
}
