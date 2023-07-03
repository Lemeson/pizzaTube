<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Bebida extends Model
{
    use HasFactory;

    public static function cadastra($request)
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            $bebida = new InsereBebidaModel();
            $bebida->nomeBebida = $request->input('bebida.nomeBebida');
            $bebida->valorBebida = $request->input('bebida.valorBebida');
            $bebida->custoBebida = $request->input('bebida.custoBebida');
            $bebida->save();
            return $bebida;
        } else {
            return null;
        }
    }

    public function canAccess()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('private/insere-bebida');
        } else {
            return view('dashboard');
        }
    }
}