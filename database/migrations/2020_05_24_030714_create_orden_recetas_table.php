<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_recetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('orden_id')->unsigned()->nullable();
            $table->bigInteger('receta_id')->unsigned()->nullable();
            $table->decimal('precio');
            $table->integer('cantidad');
            $table->decimal('subtotal');

            $table->timestamps();

            $table->foreign('orden_id')->references('id')->on('ordens')->onDelete('cascade');
            $table->foreign('receta_id')->references('id')->on('recetas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_recetas');
    }
}
