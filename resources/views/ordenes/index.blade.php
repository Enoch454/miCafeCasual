@extends('layouts.app')

@section('content')
<div class="container">
    <section class="row justify-content-center">
        <div class="col-md-8">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Monto</th>
                        <th scope="col">Terminado??</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ordenes as $orden)
                        <tr>
                            <td>{{ $orden->created_at }}</td>
                            <td>{{ $orden->user()->get()->first()->name }}</td>
                            <td>{{ $orden->monto }}</td>
                            <td>
                                @if($orden->estaHecha == TRUE)
                                    si
                                @else
                                    no
                                @endif
                            </td>
                            <td style="display: flex;">
                                <a class="btn btn-info" href="{{ route('ordens.detalles_view', [$orden->id]) }}" style="margin-right: 5px;">
                                    Detalles
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </section>
</div>
@endsection