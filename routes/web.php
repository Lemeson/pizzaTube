<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\BebidaController;
use App\Http\Controllers\EsfihaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use App\Http\Controllers\SwapiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/insere-pizza', [PizzaController::class, 'inserePizza'])->name('insere-pizza');

    Route::post('/pizza-inserida', [PizzaController::class, 'store'])->name('pizza-inserida');

    Route::get('/insere-bebida', [BebidaController::class, 'insereBebida'])->name('insere-bebida');

    Route::post('/bebida-inserida', [BebidaController::class, 'store'])->name('bebida-inserida');

    Route::get('/insere-esfiha', [EsfihaController::class, 'insereEsfiha'])->name('insere-esfiha');

    Route::post('/esfiha-inserida', [EsfihaController::class, 'store'])->name('esfiha-inserida');

    Route::get('/insere-cliente', [ClienteController::class, 'insereCliente'])->name('insere-cliente');

    Route::post('/cliente-inserido', [ClienteController::class, 'store'])->name('cliente-inserido');

    Route::get('/insere-funcionario', [FuncionarioController::class, 'insereFuncionario'])->name('insere-funcionario');

    Route::post('/funcionario-inserido', [FuncionarioController::class, 'store'])->name('funcionario-inserido');

    Route::get('/insere-ingrediente', [IngredienteController::class, 'insereIngrediente'])->name('insere-ingrediente');

    Route::post('/ingrediente-inserido', [IngredienteController::class, 'store'])->name('ingrediente-inserido');

    Route::get('/insere-pedido', [PedidoController::class, 'inserePedido'])->name('insere-pedido');

    Route::post('/pedido-inserido', [PedidoController::class, 'store'])->name('pedido-inserido');

    Route::get('/insere-receita', [ReceitaController::class, 'insereReceita'])->name('insere-receita');

    Route::post('/receita-inserida', [ReceitaController::class, 'store'])->name('receita-inserida');

    // Rota que trata a exclusão de um item
    Route::post('/deletar-item', [ItemController::class, 'deletarItem'])->name('deletar-item');

    Route::get('/pedido', [PedidoController::class, 'index']);

    Route::post('/pedido/{id}', [PedidoController::class, 'getDadosPedido']);


});

Route::get('/', [PizzaController::class, 'index'])->name('index');

Route::get('/cardapio', [PizzaController::class, 'cardapio'])->name('cardapio');

Route::get('/sobre-nos', [PizzaController::class, 'sobreNos'])->name('sobre-nos');

Route::get('/contato', [PizzaController::class, 'contato'])->name('contato');

//Route::get('/nova-pizza', function () {
    //return view('insere-pizza');
//});

//Route::get('/nova-pizza', [PizzaController::class, 'inserePizza'])->name('inserePizza')->middleware('auth');

//Route::get('/swapi', 'SwapiController@index');

Route::get('/swapi', [SwapiController::class, 'index']);


