<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    public function endereco()
    {
        return $this->hasOne('acclinic\Endereco');
    }
}
