@extends('componentsTablero.nav')

@section('contenido')
<div class="container-xl px-4 mt-4">  
<div class="col-lg-8">
    <div class="card mb-4">
        <div class="card-header">Crear cargo</div>
        <div class="card-body">
            <form action="{{url('/cargo/'.$cargo->id)}}" method="post">
                <!-- Form Group (current password)-->
                @csrf
                {{ method_field('PATCH')}}
               @include('cargo.form');
            </form>
        </div>
    </div>
</div>
</div>

@endsection