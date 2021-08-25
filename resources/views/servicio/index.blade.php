@extends('componentsTablero.nav')

@section('contenido')

<div class="container-xl px-4 mt-4">  
    <div class="col-xl-8 mb-8">
        <div class="card card-header-actions h-100">
        <div class="card-header">
            servicio
            <a href="{{url('/servicio/create')}}"  class="btn btn-primary"><i class="fas fa-plus-circle"></i>Nuevo</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Partida presupuestaria</th>
                        <th>Grupo Ocupacional</th>
                        <th>Grado</th>
                        <th>Remuneracion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $servicios as $servicio)
                    <tr>
                        <td>{{$servicio->part_presu}}</td>
                        <td>{{$servicio->grupo_ocupacional}}</td>
                        <td>{{$servicio->grado}}</td>
                        <td>{{$servicio->remuneracion}}</td>
                       
                        <td>
                            <div class="row">

                                             
                            <form action="{{ url('/servicio/'.$servicio->id)}}" method="post">
                                @csrf
                                {{ method_field('DELETE')}}
                                <a href="{{url('/servicio/'.$servicio->id.'/edit')}}"  class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></a>
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