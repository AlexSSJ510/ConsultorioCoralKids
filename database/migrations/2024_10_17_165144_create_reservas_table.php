<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('email', 100);
            $table->string('telefono', 20);
            $table->date('fecha');
            $table->string('especialidad', 50);
            $table->text('mensaje');
            $table->timestamp('fecha_reserva')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
