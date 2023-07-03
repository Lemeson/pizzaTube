<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pizza extends Model
{
    use HasFactory;

    public static function cadastra($request)
    {
        $role = Auth::user()->role;
    
        if ($role == '1') {
            $pizza = new InserePizzaModel();
            $pizza->nomePizza = $request->input('pizza.nomePizza');
            $pizza->valorPizza = $request->input('pizza.valorPizza');
            $pizza->custoPizza = $request->input('pizza.custoPizza');
            $pizza->save();
            return $pizza;
        } else {
            return null;
        }}    



    public function canAccess()
    {
        $role = Auth::user()->role; // Obtém a função do usuário logado

        if ($role == '1') {
            //return view('admin.dashboard');
            return view('private/insere-pizza');
        } else {
            return view('dashboard');
        }
    }
}

