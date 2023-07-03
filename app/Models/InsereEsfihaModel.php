<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsereEsfihaModel extends Model
{
    use HasFactory;

    protected $table = 'esfihas'; // nome da tabela
    protected $fillable = ['nomeEsfiha', 'valorEsfiha',  'custoBebida']; // nome dos campos da tabela
}
