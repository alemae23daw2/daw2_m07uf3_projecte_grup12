<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuaris', function (Blueprint $table) {
            $table->string('nomCognoms');
            $table->string('email')->unique();
            $table->string('contrasenya');
            $table->enum('tipus', ['treballador', 'cap de departament']);
            $table->string('horaEntrada');
            $table->string('horaSortida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuaris');
    }
};
