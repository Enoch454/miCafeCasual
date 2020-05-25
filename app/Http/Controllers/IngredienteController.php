<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a list of ingredientes
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request){
        $ingredientes = Ingrediente::get();
        return view('ingredientes.index', ['ingredientes' => $ingredientes]);
    }

    /**
     * Crea un nuevo ingrediente
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request){
        //dd($request);
        $this->validate($request, [
            'cantidad' => 'numeric|min:0'
        ]);
        
        Ingrediente::create([
            'nombre' => $request->nombre,
            'cantidad' => $request->cantidad,
            'unidad' => $request->unidad,
        ]);
        
        return redirect('/ingredientes');
    }

    /**
     * Elimina registro de la tabla ingredientes
     * 
     * @param Ingrediente id $id
     * @return Response
     */
    public function destroy($id){
        $ingrediente = Ingrediente::find($id);
        //$this->authorize('verify',$task);
        if(empty($ingrediente)){
            return redirect('/ingredientes');
        }
        $ingrediente->delete();
        return redirect('/ingredientes');
    }

    /**
     * Muestra vista de edicion
     * 
     * @param Ingrediente id $id
     * @return Response
     */
    public function editView($id){
        $ingrediente = Ingrediente::find($id);
        //$this->authorize('verify',$task);
        if(empty($ingrediente)){
            return redirect('/ingredientes');
        }
        return view('ingredientes.edit', [
            'ingrediente' => $ingrediente
        ]);
        
    }

    /**
     * Edita el ingrediente
     * 
     * @param Request $request
     * @param Ingrediete id $id
     * @return Response
     */
    public function edit(Request $request, $id){
        //dd($request->all());
        $this->validate($request, [
            'cantidad' => 'numeric|min:0'
        ]);
        $ingrediente = Ingrediente::find($id);
        //$this->authorize('verify',$task);
        if(empty($ingrediente)){
            return redirect('/ingredientes');
        }
        $ingrediente->nombre = $request->nombre;
        $ingrediente->cantidad = $request->cantidad;
        $ingrediente->unidad = $request->unidad;
        $ingrediente->save();
        return redirect('/ingredientes');
    }
}
