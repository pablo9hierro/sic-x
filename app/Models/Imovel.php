<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Imovel extends Model
{
    use HasFactory;

    //comando para dar o nome que eu escolhi à tabela, pois o laravel sempre vai criar
//a tabela colocando 's' no final por padrão e vai arrombar com tudo
    protected $table = 'imoveis';

    
    protected $fillable = [
        'status',
        'titulo',
        'descricao',
        'm2',
        'quintal',
        'tipo',
        'pet',
        'cep',
        'numero_do_imovel',
        'tempo_aluguel',
        'bairro',
        'cidade',
        'estado',
    ];
}