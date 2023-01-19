<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('membros', function (Blueprint $table) {
            $table->string('cpf');
            $table->string('rg');
            $table->string('naturalidade');
            $table->date('dataNascimento')
            $table->string('nacionalidade');
            $table->string('profissao');
            $table->string('sexo');
            $table->string('estadoCivil');
            $table->string('grauInstrucao');
            $table->string('pai')->nullable();
            $table->string('mae');
            $table->string('endereco');
            $table->string('numeroLar');
            $table->string('complementoEndereco')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            $table->string('telefone')->nullable();
            $table->string('celular');
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('membros', function (Blueprint $table) {
            $table->dropColumn('cpf');
            $table->dropColumn('rg');
            $table->dropColumn('naturalidade');
            $table->dropColumn('dataNascimento')
            $table->dropColumn('nacionalidade');
            $table->dropColumn('profissao');
            $table->dropColumn('sexo');
            $table->dropColumn('estadoCivil');
            $table->dropColumn('grauInstrucao');
            $table->dropColumn('pai');
            $table->dropColumn('mae');
            $table->dropColumn('endereco');
            $table->dropColumn('numeroLar');
            $table->dropColumn('complementoEndereco');
            $table->dropColumn('bairro');
            $table->dropColumn('cidade');
            $table->dropColumn('uf');
            $table->dropColumn('cep');
            $table->dropColumn('telefone');
            $table->dropColumn('celular');
            $table->dropColumn('email');
        });
    }
};
