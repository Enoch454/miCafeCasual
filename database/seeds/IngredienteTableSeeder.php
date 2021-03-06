<?php

use Illuminate\Database\Seeder;
use App\Ingrediente;

class IngredienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingre1 = new Ingrediente();
        $ingre1->nombre = 'Café molido';
        $ingre1->cantidad = 5;
        $ingre1->unidad = 'kg';
        $ingre1->unidadAlter = '0.015';
        $ingre1->nombreUnidadAlter = 'cuchadaras';
        $ingre1->save();

        $ingre2 = new Ingrediente();
        $ingre2->nombre = 'Agua';
        $ingre2->cantidad = 20;
        $ingre2->unidad = 'lts';
        $ingre2->unidadAlter = '0.250';
        $ingre2->nombreUnidadAlter = 'tazas';
        $ingre2->save();

        $ingre3 = new Ingrediente();
        $ingre3->nombre = 'Azucar';
        $ingre3->cantidad = 5;
        $ingre3->unidad = 'kg';
        $ingre3->unidadAlter = '0.015';
        $ingre3->nombreUnidadAlter = 'cuchadaras';
        $ingre3->save();

        $ingre4 = new Ingrediente();
        $ingre4->nombre = 'Leche';
        $ingre4->cantidad = 5;
        $ingre4->unidad = 'lts';
        $ingre4->unidadAlter = '0.250';
        $ingre4->nombreUnidadAlter = 'tazas';
        $ingre4->save();

        $ingre5 = new Ingrediente();
        $ingre5->nombre = 'Chocolate';
        $ingre5->cantidad = 4;
        $ingre5->unidad = 'kg';
        $ingre5->unidadAlter = '0.015';
        $ingre5->nombreUnidadAlter = 'cuchadaras';
        $ingre5->save();

        $ingre6 = new Ingrediente();
        $ingre6->nombre = 'Canela en polvo';
        $ingre6->cantidad = 1;
        $ingre6->unidad = 'kg';
        $ingre6->unidadAlter = '0.015';
        $ingre6->nombreUnidadAlter = 'cuchadaras';
        $ingre6->save();

        $ingre7 = new Ingrediente();
        $ingre7->nombre = 'Nata';
        $ingre7->cantidad = 2;
        $ingre7->unidad = 'lts';
        $ingre7->unidadAlter = '0.25';
        $ingre7->nombreUnidadAlter = 'tazas';
        $ingre7->save();

        $ingre8 = new Ingrediente();
        $ingre8->nombre = 'Leche evaporada';
        $ingre8->cantidad = 1;
        $ingre8->unidad = 'lts';
        $ingre8->unidadAlter = '0.25';
        $ingre8->nombreUnidadAlter = 'tazas';
        $ingre8->save();

        $ingre9 = new Ingrediente();
        $ingre9->nombre = 'Té verde';
        $ingre9->cantidad = 20;
        $ingre9->unidad = 'bolsas';
        $ingre9->unidadAlter = '1';
        $ingre9->nombreUnidadAlter = 'bolsitas';
        $ingre9->save();

        $ingre10 = new Ingrediente();
        $ingre10->nombre = 'hielo';
        $ingre10->cantidad = 32;
        $ingre10->unidad = 'cubos';
        $ingre10->unidadAlter = '1';
        $ingre10->nombreUnidadAlter = 'cubitos';
        $ingre10->save();

    }
}
