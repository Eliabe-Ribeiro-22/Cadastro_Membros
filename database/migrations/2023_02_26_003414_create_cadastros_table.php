<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::connection('sqlite')->create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->default('');
            $table->string('situacao')->default('');
            $table->string('congregacao')->default('');
            $table->string('setor')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastros');
    }
}
