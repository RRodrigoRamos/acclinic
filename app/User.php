<?php

namespace acclinic;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','name_social','email','sexo','data_nasc','telefone','cpf','password',
        'convenio_id','triagem_id','endereco_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token','updated_at','created_at'
    ];

    public function endereco()
    {
        return $this->hasOne(\acclinic\Endereco::class);
    }

    public function triagen()
    {
        return $this->hasOne(\acclinic\Triagen::class);
    }
    
    public function convenio()
    {
        return $this->hasOne(\acclinic\Convenio::class);
    }

    public function agenda()
    {
        return $this->belongsTo(\acclinic\Agendamento::class);
    }

}
