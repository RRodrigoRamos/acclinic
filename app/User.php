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
        'foto','name','name_social', 'email','sexo','data_nasc','telefone','rg','cpf','profissao','convenio_id','triagem_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function endereco()
    {
        return $this->hasOne('acclinic\Endereco');
    }

    public function agenda()
    {
        return $this->hasMany('acclinic\Agendamento');

    }

}
