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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('dniClient')->primary();
            $table->string('nomCognoms');
            $table->integer('edat');
            $table->string('telefon');
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('pais');
            $table->string('email');
            $table->enum('tipusTarjeta', ['Dèbit', 'Crèdit']);
            $table->string('numeroTarjeta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
