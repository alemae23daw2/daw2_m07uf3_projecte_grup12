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
        Schema::create('apartaments', function (Blueprint $table) {
            $table->string('codiUnic')->primary();
            $table->string('referencia');
            $table->string('ciutat');
            $table->string('barri');
            $table->string('nomCarrer');
            $table->string('numCarrer');
            $table->integer('pis');
            $table->integer('numLlits');
            $table->integer('numHabitacions');
            $table->enum('ascensor', ['si', 'no']);
            $table->enum('calefaccio', ['Elèctrica', 'Gas Natural', 'Butá']);
            $table->enum('aireCondicionat', ['si', 'no']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartaments');
    }
};
