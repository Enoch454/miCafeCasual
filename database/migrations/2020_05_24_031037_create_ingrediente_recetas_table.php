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
<<<<<<< HEAD
            $table->float('cantidad',9,3);
=======
            $table->float('cantidad',8,3);
>>>>>>> 16ce0ce29c8b7ba122610e68f4f7b823ecf19186

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
