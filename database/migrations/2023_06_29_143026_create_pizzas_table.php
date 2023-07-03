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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->string('nomePizza', 100)->unique(); // 100 caracteres no máximo e não pode repetir
            $table->float('valorPizza', 4, 2);
            $table->float('custoPizza', 4, 2);/// 8 dígitos no total, 2 dígitos após a vírgula
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
