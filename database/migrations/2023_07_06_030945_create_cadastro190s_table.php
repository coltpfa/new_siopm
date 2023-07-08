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
        Schema::create('cadastro190s', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('horario');
            $table->string('solicitante')->nullable();
            $table->string('anonimo')->nullable();
            $table->string('telefone')->nullable();
            $table->string('cidade')->nullable();
            $table->string('endereço')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('referencia')->nullable();
            $table->string('bpmm');
            $table->string('naturezaocorrencia');
            $table->string('policialemperigo');
            $table->string('celular_numeroimei')->nullable();
            $table->string('celular_modelo')->nullable();
            $table->string('celular_marca')->nullable();
            $table->string('celular_situação')->nullable();
            $table->string('veiculo_placa')->nullable();
            $table->string('veiculo_marca')->nullable();
            $table->string('veiculo_modelo')->nullable();
            $table->string('veiculo_cor')->nullable();
            $table->string('veiculo_chassi')->nullable();
            $table->string('veiculo_situacao')->nullable();
            $table->string('pessoas_rg')->nullable();
            $table->string('pessoas_nome')->nullable();
            $table->string('pessoas_situacao')->nullable();
            $table->string('status');
            $table->string('visualizacao');
            $table->string('situacao');
            $table->string('observacao');
            $table->string('atendimento');
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
        Schema::dropIfExists('cadastro190s');


    }
};
