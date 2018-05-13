<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function cidades()
    {
        return $this->hasMany('acclinic\Estado');
    }
}