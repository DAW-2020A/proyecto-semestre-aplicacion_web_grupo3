<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriePlace extends Model
{
    protected $fillable=['name'];
    public function interespoint()
    {
        return $this->hasMany('App\InterestPoint');
    }
}
