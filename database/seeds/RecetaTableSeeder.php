<?php

use Illuminate\Database\Seeder;
use App\Receta;

class RecetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $receta1 = new Receta();
        $receta1->nombre = 'Café americano';
        $receta1->descripcion = "Lo puedes preparar en una olla o en tu cafetera de toda la vida. Se pone el agua y el café y se hierve. Se remueve a fuego lento durante unos minutos y estará listo para servir y tomar.
Ya ves que es muy fácil de elaborar. Si te gusta el café con cuerpo ligero y poco amargo, el café americano es tu bebida. ¡Disfrútalo!";
        $receta1->categoria = 'Cafés';
        $receta1->precio = 19.0;
        $receta1->save();

        $receta2 = new Receta();
        $receta2->nombre = 'Café capuchino';
        $receta2->descripcion = "Esta receta de café capuchino la puedes preparar en caliente o en frío, en los dos casos estará delicioso. El primero de los ingredientes a tener en cuenta es preparar una buena taza de café. Si tienes cafetera italiana o expreso, un truco para que quede un café delicioso es añadir media cucharada de canela a la mezcla. Aportará un sabor dulce.
Una vez tenemos el café listo, añadimos el azúcar al gusto y empezaremos a preparar la presentación de este delicioso plato. En una taza de cristal ponemos en café en el fondo. Añadimos la leche caliente si le damos un toque nos hará un poco de espuma, algo necesario para darle mayor vistosidad.
Por último, coronamos este café con nata montada y un poco de chocolate rallado o en polvo. Estos ingredientes son los que endulzan un café que se convierte en el rey indiscutible de todas las mesas. Disfruta de uno de los mejores cafés del mundo en compañía de quien más quieres o en soledad de un día especial.";
        $receta2->categoria = 'Cafés';
        $receta2->precio = 29.0;
        $receta2->save();
        
        $receta3 = new Receta();
        $receta3->nombre = 'Café late';
        $receta3->descripcion = "En un recipiente pon a fuego medio las dos leches, retíralas cuando empiecen a evaporar sin que hiervan.
Bate la mezcla de leches hasta que espumen lo suficiente, puedes usar batidor de globo o eléctrico.
Prepara una taza de café con agua, café y azúcar al gusto. Vierte la mitad de la leche en cada taza y luego agrega una porción al gusto de café. Decora con canela en polvo.";
        $receta3->categoria = 'Cafés';
        $receta3->precio = 29.0;
        $receta3->save();

        $receta4 = new Receta();
        $receta4->nombre = 'Té verde';
        $receta4->descripcion = "hieva agua, ponga una bolsa en una taza mamalona, coloque agua y esperate un rato, hecha hielos y azucar y amonos";
        $receta4->categoria = 'Tés';
        $receta4->precio = 10.0;
        $receta4->save();
        
    }
}
