<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
	protected $fillable = [
        'foto', 'name','crm','sexo','data_nasc','telefone','email','especialidade_id','endereco_id',
    ];
    
    public function endereco()
    {
        return $this->hasOne(\acclinic\Endereco::class);
    }

    public function especialidade()
    {
        return $this->hasMany(\acclinic\Especialidade::class);
    }
    public function medicoAgenda()
    {
        return $this->belongsTo(\acclinic\ClinicaMedico::class);
    }
}
