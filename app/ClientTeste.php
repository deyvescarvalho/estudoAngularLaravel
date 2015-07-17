<?php

namespace CodeProject;

use Illuminate\Database\Eloquent\Model;

class ClientTeste extends Model
{
    protected $fillable = [
        'nome',
        'phone',
        'endereco',
        'idade'
    ];
}
