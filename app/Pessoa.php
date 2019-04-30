<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $primaryKey = 'id_pessoa';
    
    protected $fillable = [
        
        'nome', 
        'telefone', 
        'cpf ',
        'escolaridade '
    ];

   

}
