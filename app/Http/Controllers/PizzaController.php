<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Pizza;
use Illuminate\Support\Facades\DB;
use App\Models\InserePizzaModel;
use App\Models\InsereBebidaModel;
use App\Models\InsereEsfihaModel;




class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        //return view('home');
        return view('home', [
            'user' => $request->user(),
        ]);
    }

 

    /**
     * Show the form for creating a new resource.
     */
    public function cardapio()
    {
        $pizzas = InserePizzaModel::all();
        $bebidas = InsereBebidaModel::all();
        $esfihas = InsereEsfihaModel::all();

        return view('public.cardapio2', compact('pizzas', 'esfihas', 'bebidas'));
    }

    public function sobreNos()
    {
        return view('public/sobre-nos');
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $pizza = Pizza::cadastra($request);

    if ($pizza) {
        return redirect()->back()->with('success', 'Pizza cadastrada com sucesso!');
    } else {
        return redirect()->back()->with('error', 'Acesso não autorizado!');
    }
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

    public function inserePizza()
    {
        $pizza = new Pizza();

        return($pizza->canAccess());

    }
}
