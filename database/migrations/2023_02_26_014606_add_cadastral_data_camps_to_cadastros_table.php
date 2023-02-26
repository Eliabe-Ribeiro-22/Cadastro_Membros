<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCadastralDataCampsToCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('sqlite')->table('cadastros', function (Blueprint $table) {
            $table->string('cpf')->default('');
            $table->string('rg')->default('');
            $table->string('naturalidade')->default('');
            $table->dateTime('dataNascimento')->nullable();
            $table->string('nacionalidade')->default('');
            $table->string('profissao')->default('');
            $table->string('sexo')->default('');
            $table->string('estadoCivil')->default('');
            $table->string('grauInstrucao')->default('');
            $table->string('pai')->nullable()->default('');
            $table->string('mae')->default('');
            $table->string('endereco')->default('');
            $table->string('numeroLar')->default('');
            $table->string('complementoEndereco')->nullable();
            $table->string('bairro')->default('');
            $table->string('cidade')->default('');
            $table->string('uf')->default('');
            $table->string('cep')->default('');
            $table->string('telefone')->nullable();
            $table->string('celular')->default('');
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
        Schema::table('cadastros', function (Blueprint $table) {
            $table->dropColumn('cpf');
            $table->dropColumn('rg');
            $table->dropColumn('naturalidade');
            $table->dropColumn('dataNascimento');
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
}
