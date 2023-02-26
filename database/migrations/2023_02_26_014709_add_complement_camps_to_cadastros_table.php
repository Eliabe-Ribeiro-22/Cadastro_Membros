<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddComplementCampsToCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('sqlite')->table('cadastros', function (Blueprint $table) {
            $table->dateTime('dataConversao')->nullable();
            $table->string('batismoAguas')->nullable();
            $table->dateTime('dataBatismoAguas')->nullable();
            $table->string('batismoES')->nullable();
            $table->dateTime('dataBatismoES')->nullable();
            // $table->boolean('dizimista');
            $table->string('observacoes')->nullable();
            $table->timestamps();
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
            $table->dropColumn('dataConversao');
            $table->dropColumn('batismoAguas');
            $table->dropColumn('dataBatismoAguas');
            $table->dropColumn('batismoES');
            $table->dropColumn('dataBatismoES');
            //$table->dropColumn('dizimista');
            $table->dropColumn('observacoes');
        });
    }
}
