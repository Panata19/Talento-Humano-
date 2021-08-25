@extends('componentsTablero.nav')

@section('contenido')

<div class="container-xl px-4 mt-4">  
    <div class="col-xl-20 mb-8">
        <div class="card card-header-actions h-100">
        <div class="card-header">
            Servidor publico
            <a href="{{url('/trabajador/create')}}"  class="btn btn-primary"><i class="fas fa-plus-circle"></i>Nuevo</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Cedula</th>
                        <th>Nombre Completo</th>
                        <th>email</th>
                        <th>Telefono</th>
                        <th>Curriculo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $trabajadores as $trabajador)
                    <tr>
                        <td>
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage').'/'.$trabajador->foto }}" class="avatar-img img-fluid">
                            </div>
                            </td>
                        <td>{{$trabajador->cedula}}</td>
                        <td>{{$trabajador->nombre_completo}}</td>
                        <td>{{$trabajador->email}}</td>
                        <td>{{$trabajador->telefono}}</td>
                        <td><a href="{{ asset('storage').'/'.$trabajador->curriculo }}" target="_blank">Curriculo</a></td>
                       
                        <td>
                            <div class="row">

                                             
                            <form action="{{ url('/trabajador/'.$trabajador->id)}}" method="post">
                                @csrf
                                {{ method_field('DELETE')}}
                                <a href="{{url('/trabajador/'.$trabajador->id.'/edit')}}"  class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></a>
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