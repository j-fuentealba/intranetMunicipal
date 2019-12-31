<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ordenCompra_id');
            $table->unsignedBigInteger('user_id'); //foreing key users
            $table->bigInteger('iddoc');
            $table->unsignedBigInteger('proveedor_id'); //FK Proveedores
            $table->unsignedBigInteger('estado_id'); //FK StatusOC
            $table->string('tipoOrdenCompra'); // 1.- Menores 3UTM - 2.- Licitaciones - 3.- Trato Directo - 4.- Convenio Marco
            $table->bigInteger('factura_id')->nullable(); //FK Factura
            $table->bigInteger('solicitud1')->nullable();
            $table->bigInteger('solicitud2')->nullable();
            $table->string('valorEstimado');
            $table->bigInteger('totalOrdenCompra');
            $table->string('excepcion')->default('No');
            $table->boolean('enviadaProveedor')->default(0);
            $table->string('deptoRecepcion'); //Depto quien recepciona
            $table->text('motivoAnulacion')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('status_o_c_s')->onDelete('cascade');
            //$table->foreign('factura_id')->references('id')->on('factura')->onDelete('cascade');



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
        Schema::dropIfExists('orden_compras');
    }
}
