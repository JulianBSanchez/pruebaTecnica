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
        Schema::create('pedidos_productos', function (Blueprint $table) {
            $table->unsignedBigInteger('pedido_id')->unsigned();
            $table->unsignedBigInteger('producto_id')->unsigned();
        
            $table->foreign('pedido_id')->references('id')->on('productos');
            $table->foreign('producto_id')->references('id')->on('pedidos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_productos');
    }
};
