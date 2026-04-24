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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('marca');           // Campo 1
            $table->string('modelo');          // Campo 2
            $table->decimal('precio', 10, 2);  // Campo 3
            $table->string('estado');          // Campo 4
            $table->text('observaciones')->nullable(); // Campo 5 (Acepta nulos)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
