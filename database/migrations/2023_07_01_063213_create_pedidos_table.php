<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('esfiha_id')->nullable()->constrained('esfihas');
            $table->foreignId('pizza_id')->nullable()->constrained('pizzas');
            $table->foreignId('bebida_id')->nullable()->constrained('bebidas');
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('valor_compra', 8, 2)->nullable();
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
