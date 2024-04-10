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
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->float('m2');
            $table->boolean('quintal')->default(false);
            $table->enum('tipo', ['casa', 'condominio', 'apartamento', 'kitnet', 'comodo']);
            $table->boolean('pet')->default(false);
            $table->integer('cep');
            $table->integer('numero_do_imovel');
            $table->date('tempo_aluguel');
            $table->timestamps(); // Adiciona created_at e updated_at automaticamente
            // Definindo a chave estrangeira da tabela de usuários
            $table->unsignedBigInteger('user_id');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_imovel');
    }
};
