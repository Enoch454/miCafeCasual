<?php

use Illuminate\Database\Seeder;
use App\Ingrediente;
use App\Receta;
use App\IngredienteReceta;

class IngredienteRecetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in_cafemolido = Ingrediente::where('nombre', 'Café molido')->get()->first()->id;
        $in_agua = Ingrediente::where('nombre', 'Agua')->get()->first()->id;
        $in_azucar = Ingrediente::where('nombre', 'Azucar')->get()->first()->id;
        $in_leche = Ingrediente::where('nombre', 'Leche')->get()->first()->id;
        $in_chocolate = Ingrediente::where('nombre', 'Chocolate')->get()->first()->id;
        $in_canela = Ingrediente::where('nombre', 'Canela en polvo')->get()->first()->id;
        $in_nata = Ingrediente::where('nombre', 'Nata')->get()->first()->id;
        $in_lecheevaporada = Ingrediente::where('nombre', 'Leche evaporada')->get()->first()->id;
        $in_teverde = Ingrediente::where('nombre', 'Té verde')->get()->first()->id;
        $in_hielo = Ingrediente::where('nombre', 'hielo')->get()->first()->id;

        $re_cafeamericano = Receta::where('nombre', 'Café americano')->get()->first()->id;
        $re_cafecapuchino = Receta::where('nombre', 'Café capuchino')->get()->first()->id;
        $re_cafelate = Receta::where('nombre', 'Café late')->get()->first()->id;
        $re_teverde = Receta::where('nombre', 'Té verde')->get()->first()->id;

        //cafe americano
        IngredienteReceta::create([
            'ingrediente_id' => $in_cafemolido,
            'receta_id' => $re_cafeamericano,
            'cantidad' => 0.015
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_agua,
            'receta_id' => $re_cafeamericano,
            'cantidad' => 0.25
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_azucar,
            'receta_id' => $re_cafeamericano,
            'cantidad' => 0.030
        ]);

        //capuchino
        IngredienteReceta::create([
            'ingrediente_id' => $in_leche,
            'receta_id' => $re_cafecapuchino,
            'cantidad' => 0.25
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_chocolate,
            'receta_id' => $re_cafecapuchino,
            'cantidad' => 0.015
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_canela,
            'receta_id' => $re_cafecapuchino,
            'cantidad' => 0.015
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_nata,
            'receta_id' => $re_cafecapuchino,
            'cantidad' => 0.125
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_cafemolido,
            'receta_id' => $re_cafecapuchino,
            'cantidad' => 0.015
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_agua,
            'receta_id' => $re_cafecapuchino,
            'cantidad' => 0.25
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_azucar,
            'receta_id' => $re_cafecapuchino,
            'cantidad' => 0.030
        ]);

        //Late
        IngredienteReceta::create([
            'ingrediente_id' => $in_canela,
            'receta_id' => $re_cafelate,
            'cantidad' => 0.030
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_leche,
            'receta_id' => $re_cafelate,
            'cantidad' => 0.125
        ]);
        
        IngredienteReceta::create([
            'ingrediente_id' => $in_lecheevaporada,
            'receta_id' => $re_cafelate,
            'cantidad' => 0.125
        ]);
        
        IngredienteReceta::create([
            'ingrediente_id' => $in_cafemolido,
            'receta_id' => $re_cafelate,
            'cantidad' => 0.030
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_agua,
            'receta_id' => $re_cafelate,
            'cantidad' => 0.250
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_azucar,
            'receta_id' => $re_cafelate,
            'cantidad' => 0.030
        ]);

        //te verde
        IngredienteReceta::create([
            'ingrediente_id' => $in_agua,
            'receta_id' => $re_teverde,
            'cantidad' => 0.25
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_teverde,
            'receta_id' => $re_teverde,
            'cantidad' => 1
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_azucar,
            'receta_id' => $re_teverde,
            'cantidad' => 0.060
        ]);

        IngredienteReceta::create([
            'ingrediente_id' => $in_hielo,
            'receta_id' => $re_teverde,
            'cantidad' => 4
        ]);




    }
}
