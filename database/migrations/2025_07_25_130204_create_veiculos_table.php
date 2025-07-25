<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('chassi')->unique();
            $table->enum ('tipo_veiculo', ['carro', 'moto', 'barco']);
            $table->enum ('categoria', ['luxuoso', 'medio', 'baixo'])->default('medio');
            $table->string('numero_motor')->unique();
            $table->string('numero_serie')->unique();
            $table->foreignId('modelo_id')->constrained('modelos')->onDelete('cascade');
            $table->foreignId('cor_id')->constrained('cors')->onDelete('cascade');
            $table->date('data_fabricacao');
            $table->date('data_registro');
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
        Schema::dropIfExists('veiculos');
    }
}
