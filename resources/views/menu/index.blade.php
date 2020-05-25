@extends('layouts.app')

@section('content')
<div class="container">
    <section class="row justify-content-center">
        <div class="col-md-8">
            <form method="GET" action="{{ route('ordens.store') }}">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">  #  </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recetas as $receta)
                        <tr>
                            <td>{{ $receta->nombre }}</td>
                            <td>{{ $receta->precio }}</td>
                            <td>{{ $receta->categoria }}</td>
                            <td> 
                            <input id="{{ $receta->nombre }}" type="number" class="form-control" name="{{ $receta->nombre }}" value="0" required autofocus>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Ordenar
                        </button>
                    </div>
                </div>
            </form>    
        </div>
    </section>
</div>
@endsection