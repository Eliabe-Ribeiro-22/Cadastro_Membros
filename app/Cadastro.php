<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
   
    protected $cast = [
        'items' => 'array',
    ];

    protected $fillable = [
      "nome" ,
      "situacao" ,
      "congregacao" ,
      "setor",
      "cpf" ,
      "rg" ,
      "naturalidade",
      "nacionalidade" ,
      "profissao",
      "sexo",
      "estadoCivil",
      "grauInstrucao",
      "pai",
      "mae",
      "endereco",
      "numeroLar",
      "complementoEndereco",
      "bairro",
      "cidade",
      "uf",
      "cep",
      "telefone",
      "celular",
      "email",
      "dataConversao",
      "batismoAguas",
      "dataBatismoAguas",
      "batismoES",
      "dataBatismoES",
      "observacoes"
    ];
}
