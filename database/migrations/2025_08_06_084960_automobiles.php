<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class Automobiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('automobiles', function (Blueprint $table) {
            $table->id();
            $table->softdeletes();
            $table->string('chassi')->unique();
            $table->enum ('category', ['Luxury', 'Standard', 'Economy'])->default('Standard');
            $table->foreignId('modelsId')->constrained('models')->onDelete('cascade');
            $table->foreignId('colorsId')->constrained('colors')->onDelete('cascade');
            $table->foreignId('brandsId')->constrained('brands')->onDelete('cascade');
            $table->foreignId('fuelsId')->constrained('fuels')->onDelete('cascade');
            $table->date('manufactureDate');
            $table->date('registrationDate');
            $table->string('observations')->nullable();
            $table->string('licensePlate')->unique();
            $table->string('serialNumber')->unique();
            $table->string('image')->nullable();
            $table->decimal('value', 10, 2);
            $table->string('carInsurance')->nullable();
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
        //
    }
}
