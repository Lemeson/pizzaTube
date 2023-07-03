<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Esfiha;
use App\Models\Bebida;
use App\Models\InserePizzaModel;
use App\Models\InsereBebidaModel;
use App\Models\InsereEsfihaModel;
use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{
    public function deletarItem(Request $request)
{
    // Verificar se o usuário está logado e possui a permissão necessária
    if (Auth::check() && Auth::user()->role == 1) {
        $tipo = $request->input('tipo');
        $id = $request->input('id');

        // Excluir o item com base no tipo fornecido
        switch ($tipo) {
            case 'pizza':
                $item = Pizza::find($id);
                break;
            case 'esfiha':
                $item = Esfiha::find($id);
                break;
            case 'bebida':
                $item = Bebida::find($id);
                break;
            default:
                $item = null;
        }

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Item excluído com sucesso.');
        }
    }

    return redirect()->back()->with('error', 'Erro ao excluir o item.');
}

}
