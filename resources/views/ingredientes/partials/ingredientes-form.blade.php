<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                @if(!empty($ingrediente))
                    Editar Ingrediente
                @else
                    Nueva Ingrediente
                @endif
            </div>
            <div class="card-body">
                <form method="POST" action="{{ !empty($ingrediente) ? route('ingredientes.edit', [$ingrediente->id]) : route('ingredientes.store') }}">
                    @csrf
                    <!--Nombre-->
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre del Ingrediente</label>

                        <div class="col-md-6">
                            <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ !empty($ingrediente) ? $ingrediente->nombre : old('nombe') }}" required autofocus>

                            @if ($errors->has('nombre'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!--Cantidad-->
                    <div class="form-group row">
                        <label for="cantidad" class="col-md-4 col-form-label text-md-right">Cantidad</label>

                        <div class="col-md-6">
                            <input id="cantidad" type="number" class="form-control{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" name="cantidad" value="{{ !empty($ingrediente) ? $ingrediente->cantidad : old('cantidad') }}" required autofocus>

                            @if ($errors->has('cantidad'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cantidad') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!--Unidad-->
                    <div class="form-group row">
                        <label for="unidad" class="col-md-4 col-form-label text-md-right">Unidad</label>

                        <div class="col-md-6">
                            <input id="unidad" type="text" class="form-control{{ $errors->has('unidad') ? ' is-invalid' : '' }}" name="unidad" value="{{ !empty($ingrediente) ? $ingrediente->unidad : old('unidad') }}" required autofocus>

                            @if ($errors->has('unidad'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('unidad') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!--boton submit-->
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                @if(!empty($ingrediente))
                                    Editar
                                @else
                                    Agregar
                                @endif
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
