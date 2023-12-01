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
        Schema::create('plan_inicial', function (Blueprint $table) {
            $table->id();
            $table->string('convocatoria');
            $table->date('fechainicio');
            $table->string('puesto');
            $table->string('jefe');
            $table->enum('remuneracion', ['si', 'no']);
            $table->decimal('monto', 10, 2)->nullable();
            $table->string('empresa');
            $table->date('fechafinprac');
            $table->string('horario');
            $table->string('celular');
            $table->string('adjuntar'); // Cambié 'adjunto_contrato' por 'adjuntar' para simplificar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_inicial');
    }
};
