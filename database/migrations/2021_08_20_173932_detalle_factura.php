<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_factura')->constrained('facturas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('id_producto')->constrained('productos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->float('precio_venta', 8, 2);
            $table->timestamps();
            
        });
        Schema::disableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('detalle_factura');
    }
}
