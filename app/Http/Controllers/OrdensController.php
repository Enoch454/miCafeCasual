<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use App\IngredienteReceta;
use App\Orden;
use App\OrdenReceta;
use App\Receta;
use Illuminate\Http\Request;

class OrdensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        //do somthing
        //dd($request->user());

        //primero, creo la 'orden'
        $orden = new Orden();
        $orden->user_id = $request->user()->id;
        $orden->save();

        $total = 0;
        //luego, creo los 'orden_receta' y los relaciono con la 'orden'
        foreach($request->all() as $key => $value) {

            if($value > 0){
            //corrijo el error del '_' en lugar de ' ' en $key
                $key = str_replace("_", " ", $key);
            //
                $id_receta = Receta::where('nombre', $key)->first()->id;
                $id_orden = $orden->id;
                $orden_receta = new OrdenReceta();
                $orden_receta->orden_id = $id_orden;
                $orden_receta->receta_id = $id_receta;
                $orden_receta->cantidad = $value;
            //mientras tanto, calculo el subtotal
                $precio_receta = Receta::where('nombre', $key)->first()->precio;
                $orden_receta->subtotal = $value * $precio_receta;
                $total = $total + $orden_receta->subtotal;
                $orden_receta->precio = $precio_receta;
                $orden_receta->save();
            //despues, resto la cantidad de ingredientes necesaria
                $receta_ingrediente_lista = Receta::where('nombre', $key)->first()->ingredienteRecetas()->get();
                foreach($receta_ingrediente_lista as $item){
                    $porcion_usada = $value * $item->cantidad;
                    $ingrediente = Ingrediente::find($item->ingrediente_id);
                    $ingrediente->cantidad = $ingrediente->cantidad - $porcion_usada;
                    $ingrediente->save();
                }
            }

        }

        $orden->monto = $total;
        $orden->save();
        //dd($orden);

        //al final, notifico la 'orden'
        $orden_receta_lista = $orden->ordenRecetas()->get();
        return view('menu.notificacion', [
            'monto' => $orden->monto,
            'ordenRecetas' => $orden_receta_lista,
        ]);
    }

    public function index(Request $request){
        $request->user()->authorizeRoles('admin');
        $ordenes = Orden::orderBy('estaHecha', 'asc')->get();
        return view('ordenes.index', ['ordenes' => $ordenes]);
    }

    public function detallesView($id){
        $orden_receta_lista = OrdenReceta::where('orden_id', $id)->get();
        $orden = Orden::find($id);
        return view('ordenes.detalles', [
            'orden' => $orden,
            'orden_receta_lista' => $orden_receta_lista,
        ]);
    }

    public function detalles(Request $request, $id){
        $request->user()->authorizeRoles('admin');
        $orden = Orden::find($id);
        //$this->authorize('verify',$task);
        $orden->estaHecha = $request->estaHecha;
        $orden->save();
        return redirect('/ordenes');
    }
}
