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
            $table->string('complemento')->nullable();
            $table->string('batismoAguas')->nullable();
            $table->string('dataBatismoAguas')->nullable();
            $table->string('batismoES')->nullable();
            $table->string('dataBatismoES')->nullable();
            $table->string('observacoes')->nullable();
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
            $table->dropColumn('complemento');
            $table->dropColumn('batismoAguas');
            $table->dropColumn('dataBatismoAguas');
            $table->dropColumn('batismoES');
            $table->dropColumn('dataBatismoES');
            $table->dropColumn('observacoes');
        });
    }
};
