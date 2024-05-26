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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre_modulo');
            //Atributos foraneos
            $table->unsignedBigInteger('id_profesor')->nullable();
            $table->unsignedBigInteger('id_student')->nullable();

            //referenciando la tabla users
            $table->foreign('id_profesor')
                ->references('id')
                ->on('teachers')->onDelete('set null');

            //referenciando la tabla categorias    
            $table->foreign('id_student')
                ->references('id')
                ->on('students')->onDelete('set null');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};