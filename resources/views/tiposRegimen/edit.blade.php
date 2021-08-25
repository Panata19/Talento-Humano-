@extends('componentsTablero.nav')

@section('contenido')
<div class="container-xl px-4 mt-4">  
<div class="col-lg-8">
    <div class="card mb-4">
        <div class="card-header">Editar tipos Regimen</div>
        <div class="card-body">
            <form action="{{url('/tiposRegimen/'.$tiposRegimen->id)}}" method="post">
                <!-- Form Group (current password)-->
                @csrf
                {{ method_field('PATCH')}}
               @include('tiposRegimen.form');
            </form>
        </div>
    </div>
</div>
</div>

@endsection