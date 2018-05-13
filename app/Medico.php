<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public function endereco()
    {
        return $this->hasOne('acclinic\Endereco');
    }
}
