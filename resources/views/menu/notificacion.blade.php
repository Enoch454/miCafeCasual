@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Su orden de ha realizado con exito !!! </div>

                <div class="card-body">
                    
                    <br>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ordenRecetas as $o_r)
                            <tr>
                                
                                <td>{{ $o_r->receta()->get()->first()->nombre }}</td>
                                <td>{{ $o_r->cantidad }}</td>
                                <td> $ {{ $o_r->subtotal }}</td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td> $ {{ $monto }}</td>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
            </div>
            <br>
            <a class="btn btn-info" href="{{ route('recetas.indexMenu') }}" style="margin-right: 5px;">
                Aceptar
            </a>
        </div>
    </div>
</div>
@endsection