<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('colecoes', function (Blueprint $table) {
            $table->id('idColecao');
            $table->string('nomeColecao');
            $table->text('descricao');
            $table->date('dataLancamento');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('colecoes');
    }
};
