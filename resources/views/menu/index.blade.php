@extends('layouts.app')

@section('content')
<div class="container">
    <section class="row justify-content-center">
        <div class="col-md-5">
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
        <div class="col-md-1">
            <br>
        </div>
        <div >
            <ul class="list-group">
                <li class="list-group-item active">Hable con nuestro asistente</li>
                <li class="list-group-item">
                    <iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/ade2aeb2-fea5-46b3-a8c4-3a8a4f27db5f"></iframe>
                </li>
            </ul>
        </div>
    </section>
</div>
@endsection