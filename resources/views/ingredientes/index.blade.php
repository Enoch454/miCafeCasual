@extends('layouts.app')

@section('content')
<div class="container">
    @include('ingredientes.partials.ingredientes-form')
    <br>
    @include('ingredientes.partials.ingredientes-list')
</div>
@endsection