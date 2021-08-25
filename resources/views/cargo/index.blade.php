@extends('componentsTablero.nav')

@section('contenido')

<div class="container-xl px-4 mt-4">  
    <div class="col-xl-6 mb-4">
        <div class="card card-header-actions h-100">
        <div class="card-header">
            cargos
            <a href="{{url('/cargo/create')}}"  class="btn btn-primary"><i class="fas fa-plus-circle"></i>Nuevo</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Departamento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $cargos as $cargo)
                    <tr>
                        <td>{{$cargo->nombre}}</td>
                        <td>{{$cargo->departamento->nombre}}</td>
                        <td>
                            <div class="row">

                                             
                            <form action="{{ url('/cargo/'.$cargo->id)}}" method="post">
                                @csrf
                                {{ method_field('DELETE')}}
                                <a href="{{url('/cargo/'.$cargo->id.'/edit')}}"  class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></a>
                                <button type="submit" onclick="return confirm('Seguro que deseas borrar?')" 
                                class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                

                            </form>
                            
                            </div>
                            
                                
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>        



@endsection