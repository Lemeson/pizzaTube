<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/pedido');
    }

    public function getDadosPedido(Request $request, $id)
{
    // O parâmetro $id contém o ID do pedido enviado via POST
    $id_pedido = $request->input('id_pedido');
    
    $sql = "SELECT pedidos.*, pizzas.*, esfihas.*, bebidas.*
            FROM pedidos
            LEFT JOIN pizzas ON pedidos.pizza_id = pizzas.id
            LEFT JOIN esfihas ON pedidos.esfiha_id = esfihas.id
            LEFT JOIN bebidas ON pedidos.bebida_id = bebidas.id
            WHERE pedidos.id = ?";
    
    $dadosPedido = DB::select($sql, [$id_pedido]);
    
  
    return view('dados-pedido', ['dadosPedido' => $dadosPedido]);
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
        //
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
