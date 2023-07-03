<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsereBebidaModel extends Model
{
    use HasFactory;

    protected $table = 'bebidas'; // nome da tabela
    protected $fillable = ['nomeBebida', 'valorBebida', 'custoBebida']; // nome dos campos da tabela
}