@extends('componentsTablero.nav')

@section('contenido')
<div class="container-xl px-4 mt-4">  
<div class="col-lg-8">
    <div class="card mb-4">
        <div class="card-header">Crear servicio</div>
        <div class="card-body">
            <form action="{{url('/servicio')}}" method="post">
                <!-- Form Group (current password)-->
                @csrf
               @include('servicio.form');
            </form>
        </div>
    </div>
</div>
</div>

@endsection