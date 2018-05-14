<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
     protected $fillable = [
        'cep','tipo_local','endereco', 'numero','complement','bairro_id',
    ];

    public function endereco()
    {
        return $this->belongsTo(\acclinic\Bairro::class);
    }

    public function medico()
    {
        return $this->belongsTo(\acclinic\Medico::class);
    }
    public function clinica()
    {
        return $this->belongsTo(\acclinic\Clinica::class);
    }
    public function user()
    {
        return $this->belongsTo(\acclinic\User::class);
    }
}
