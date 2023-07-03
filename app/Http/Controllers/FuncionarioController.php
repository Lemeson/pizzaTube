<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Funcionario;
use App\Models\insereFuncionarioModel;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $funcionario = Funcionario::cadastra($request);

            if ($funcionario) {
                return redirect()->back()->with('success', 'Funcionário cadastrado com sucesso!');
            } else {
                return redirect()->back()->with('error', 'Acesso não autorizado!');
            }
        } catch (\Exception $e) {
            echo "deu ruim meu irmao";
        }
    }

    public function insereFuncionario()
    {
        $funcionario = new Funcionario();

        return $funcionario->canAccess();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
