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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            
            $table-> foreign('categoria_id')->constrained;
            $table-> string('producto_codigo');
            $table-> string('producto_nombre');
            $table-> bigInteger('producto_precio');
            $table-> string('producto_descripcion');
            $table-> string('producto_foto');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
