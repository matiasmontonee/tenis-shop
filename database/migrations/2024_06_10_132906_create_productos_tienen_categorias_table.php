<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos_tienen_categorias', function (Blueprint $table) {
            $table->foreignId('producto_fk')->constrained(table: 'productos', column: 'producto_id');

            $table->unsignedSmallInteger('categoria_fk');
            $table->foreign('categoria_fk')
                ->references('categoria_id')
                ->on('categorias');

            $table->primary(['producto_fk', 'categoria_fk']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_tienen_categorias');
    }
};