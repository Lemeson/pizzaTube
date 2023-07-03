<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class InserePizzaModel extends Model
{
    use HasFactory;

    protected $table = 'pizzas'; //nome da tabela
    protected $fillable = ['nomePizza', 'valorPizza', 'custoPizza']; //nome dos campos da tabela
}
