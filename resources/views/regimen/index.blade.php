@extends('componentsTablero.nav')

@section('contenido')

<div class="container-xl px-4 mt-4">  
    <div class="col-xl-6 mb-4">
        <div class="card card-header-actions h-100">
        <div class="card-header">
            Regimen
            <a href="{{url('/regimen/create')}}"  class="btn btn-primary"><i class="fas fa-plus-circle"></i>Nuevo</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $regimenes as $regimen)
                    <tr>
                        <td>{{$regimen->nombre}}</td>
                        <td>
                            <div class="row">

                                             
                            <form action="{{ url('/regimen/'.$regimen->id)}}" method="post">
                                @csrf
                                {{ method_field('DELETE')}}
                                <a href="{{url('/regimen/'.$regimen->id.'/edit')}}"  class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></a>
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