<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Esfiha extends Model
{
    use HasFactory;

    public static function cadastra($request)
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            $esfiha = new Esfiha();
            $esfiha->nomeEsfiha = $request->input('esfiha.nomeEsfiha');
            $esfiha->valorEsfiha = $request->input('esfiha.valorEsfiha');
            $esfiha->custoEsfiha = $request->input('esfiha.custoEsfiha');
            $esfiha->save();
            return $esfiha;
        } else {
            return null;
        }
    }

    public function canAccess()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('private/insere-esfiha');
        } else {
            return view('dashboard');
        }
    }
}

