<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

    public function cidade()
    {
        return $this->hasMany('acclinic\Bairro');
    }
}
