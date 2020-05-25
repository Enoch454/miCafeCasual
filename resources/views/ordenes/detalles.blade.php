@extends('layouts.app')

@section('content')
<div class="container">
    <section class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('ordens.detalles', [$orden->id]) }}" method="POST">
            @csrf
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orden_receta_lista as $o_r)
                        <tr>
                            <td>{{ $o_r->receta()->get()->first()->nombre }}</td>
                            <td>{{ $o_r->cantidad }}</td>
                            <td>{{ $o_r->precio }}</td>
                            <td> $ {{ $o_r->subtotal }}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> $ {{ $orden->monto }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Esta Hecho??</td>
                            <td>
                                <select class='form-control' name="estaHecha" id="estaHecha">
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </section>
</div>
@endsection