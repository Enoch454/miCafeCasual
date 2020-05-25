<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;
use App\Receta;

class RecetasController extends Controller
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
    public function indexMenu(Request $request){
        $recetas = Receta::orderBy('categoria', 'asc')->get();
        return view('menu.index', ['recetas' => $recetas, 'flag' =>false, 'tempIngrediente' => null ]);
    }
}
