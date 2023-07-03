<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Funcionario extends Model
{
    use HasFactory;

    public static function cadastra($request)
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            $funcionario = new Funcionario();
            $funcionario->nome = $request->input('funcionario.nome');
            $funcionario->email = $request->input('funcionario.email');
            $funcionario->telefone = $request->input('funcionario.telefone');
            $funcionario->cep = $request->input('funcionario.cep');
            $funcionario->logradouro = $request->input('funcionario.logradouro');
            $funcionario->bairro = $request->input('funcionario.bairro');
            $funcionario->cidade = $request->input('funcionario.cidade');
            $funcionario->estado = $request->input('funcionario.estado');
            $funcionario->numero = $request->input('funcionario.numero');
            $funcionario->data_nascimento = $request->input('funcionario.data_nascimento');
            $funcionario->salario = $request->input('funcionario.salario');
            $funcionario->funcao = $request->input('funcionario.funcao');
            $funcionario->data_contratacao = $request->input('funcionario.data_contratacao');
            $funcionario->save();
            return $funcionario;
        } else {
            return null;
        }
    }

    public function canAccess()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('private/insere-funcionario');
        } else {
            return view('dashboard');
        }
    }
}
