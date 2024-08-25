<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $cast = [
        'items' => 'array',
    ];

    protected $fillable = [
      "nome" ,
      "situacao" ,
      "congregacao" ,
      "setor" ,
      "tabs" ,
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
      "observacoes",
    ];
}
