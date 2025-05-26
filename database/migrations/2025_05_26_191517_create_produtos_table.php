<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('idProduto');
            $table->string('nome');
            $table->decimal('preco', 10, 2); // Corrigido aqui
            $table->text('descricao');
            $table->integer('estoque');
            $table->string('imagem');

            // FK para categoria
            $table->unsignedBigInteger('idCategoria')->nullable();
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias')->onDelete('set null');

            // FK para coleção
            $table->unsignedBigInteger('idColecao')->nullable();
            $table->foreign('idColecao')->references('idColecao')->on('colecoes')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
