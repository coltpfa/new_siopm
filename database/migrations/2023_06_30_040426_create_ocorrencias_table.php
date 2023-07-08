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
        Schema::create('ocorrencias', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('solicitante');
            $table->string('anonimo');
            $table->string('telefone');
            $table->string('cidade');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('referencia');
            $table->string('bpmm');
            $table->string('cia');
            $table->string('naturezaocorrencia');
            $table->string('policialperigo');
            $table->string('informacoes');
            $table->string('ocorrenciacomplementar');
            $table->string('tipo');
            $table->string('viatura');
            $table->string('controlador');
            $table->string('supervisor');
            $table->string('motivofechamento');
            $table->string('informacoesfinais');
            $table->string('status');
            $table->string('log');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocorrencias');
    }
};
