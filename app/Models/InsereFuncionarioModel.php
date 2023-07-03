<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsereFuncionarioModel extends Model
{
    use HasFactory;

    protected $table = 'funcionarios'; // nome da tabela
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'salario',
        'funcao',
        'data_contratacao',
        'cep',
        'logradouro',
        'bairro',
        'cidade',
        'estado',
        'numero',
        
    ]; // nome dos campos da tabela
}







