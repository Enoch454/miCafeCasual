@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="card-359241">
                    @foreach($recetas as $receta)
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link badge badge-light" data-toggle="collapse" data-parent="#card-359241" href="#card-element-1033{{$receta->id}}">
                                <h4 class="float-left"> {{$receta->nombre}} : {{$receta->categoria}}........ $ {{$receta->precio}} </h4>
                            </a>
                        </div>
                        <div id="card-element-1033{{$receta->id}}" class="collapse">
                            <div class="card-body">
                                Ingredientes
                                <ul>
                                    @foreach($receta->IngredienteRecetas()->get() as $ingre)
                                        <li>{{$ingre->cantidadAlter()}} {{$ingredientes->find($ingre->ingrediente_id)->nombreUnidadAlter}} {{$ingredientes->find($ingre->ingrediente_id)->nombre}}</li>
                                    @endforeach
                                </ul>
                                <h5>
                                    {{$receta->descripcion}}
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection