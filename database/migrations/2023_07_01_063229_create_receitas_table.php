<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->decimal('valor_vendas', 8, 2)->nullable();
            $table->decimal('custo_producao', 8, 2)->nullable();
            $table->decimal('salario_funcionarios', 8, 2)->nullable();
            $table->foreignId('pedido_id')->nullable()->constrained('pedidos');
            $table->decimal('lucro', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('receitas');
    }
};
