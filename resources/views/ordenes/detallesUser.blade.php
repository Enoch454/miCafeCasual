@extends('layouts.app')

@section('content')
<div class="container">
    <section class="row justify-content-center">
        <div class="col-md-5">
            
            <div class ="list-group">
				<div class="list-group-item active list-group-item-dark">
                    <h2 class="list-group-item-heading">
						{{$user->name}}
					</h2>
                </div>
				<div class="list-group-item">
                    <h4 class="list-group-item-heading">
						Telefono
                    </h4>
                    <h5 class="float-right">
                        {{$user->telefono}}
                    </h5>
                </div>
                <div class="list-group-item">
                    <h4 class="list-group-item-heading">
						Direccion
                    </h4>
                    <h5 class="float-right">
                        {{$user->direccion}}
                    </h5>
				</div>
				<div class="list-group-item">
                    <h4 class="list-group-item-heading">
						E-mail
                    </h4>
                    <h5 class="float-right">
                        {{$user->email}}
                    </h5>
				</div>
            </div>
            <br>
            <a class="btn btn-info" href="{{ route('ordens.index') }}" style="margin-right: 5px;">
                Regresar
            </a>

        </div>
    </section>
</div>
@endsection