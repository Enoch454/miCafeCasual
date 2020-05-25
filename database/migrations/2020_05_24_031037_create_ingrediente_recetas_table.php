<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredienteRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_recetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ingrediente_id')->unsigned()->nullable();
            $table->bigInteger('receta_id')->unsigned()->nullable();
            $table->float('cantidad');

            $table->timestamps();

            $table->foreign('ingrediente_id')->references('id')->on('ingredientes')->onDelete('cascade');
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
        Schema::dropIfExists('ingrediente_recetas');
    }
}
