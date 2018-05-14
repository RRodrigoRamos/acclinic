<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Triagen extends Model
{
     protected $fillable = [
        'altura','peso','obs',
    ];

    public function user()
    {
        return $this->belongsTo(\acclinic\User::class);
    }
}
