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
        Schema::create('lloga', function (Blueprint $table) {
            $table->string('dniClient');
            $table->foreign('dniClient')->references('dniClient')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('codiUnic');
            $table->foreign('codiUnic')->references('codiUnic')->on('apartaments')->onDelete('cascade')->onUpdate('cascade');
            $table->date('dataInici'); //Any-Mes-Dia
            $table->string('horaInici');
            $table->date('dataFinal'); //Any-Mes-Dia
            $table->string('horaFinal');
            $table->string('lliuramentClaus'); //Lloc
            $table->string('devolucioClaus'); //Lloc
            $table->integer('preuPerDia');
            $table->enum('diposit', ['si', 'no']);
            $table->integer('dipositQuantitat');
            $table->enum('tipusAsseguranca', ['Franquícia fins a 1000 Euros', 'Franquíca fins 500 Euros', 'Sense franquícia']);
            $table->primary(['dniClient', 'codiUnic']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lloga');
    }
};
