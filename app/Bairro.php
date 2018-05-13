<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    public function bairro()
    {
        return $this->hasMany('acclinic\Endereco');
    }
}
