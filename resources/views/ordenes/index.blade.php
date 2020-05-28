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
                            <!-- Acá debe haber una liga para ver los datos del usuario -->
                            <td>
                                <form action="{{ route('users.detalles_view', [$orden->user()->get()->first()->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link">
                                    {{ $orden->user()->get()->first()->name }}
                                    </button>
                                </form>
                            </td>
                            <td>{{ $orden->monto }}</td>
                            <td>
                                @if($orden->estaHecha == TRUE)
                                    si
                                @else
                                    no
                                @endif
                            </td>
                            <td style="display: flex;">
                                <form action="{{ route('ordens.detalles_view', [$orden->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info">
                                        Detalles
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </section>
</div>
@endsection