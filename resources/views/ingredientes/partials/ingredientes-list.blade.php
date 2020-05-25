@if(!empty($ingredientes))
    <section class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Ingrediente</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Unidad</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ingredientes as $ingrediente)
                    <tr>
                        <td>{{ $ingrediente->nombre }}</td>
                        <td>{{ $ingrediente->cantidad }}</td>
                        <td>{{ $ingrediente->unidad }}</td>
                        <!--aqui van mis botones-->
                        <td style="display: flex;">
                            <a class="btn btn-info" href="{{ route('ingredientes.edit_view', [$ingrediente->id]) }}" style="margin-right: 5px;">
                                Editar
                            </a>
                            <form action="{{ route('ingredientes.destroy', [$ingrediente->id]) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">
                                    Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endif 