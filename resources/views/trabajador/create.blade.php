@extends('componentsTablero.nav')

@section('contenido')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="user"></i></div>
                        Informacion Servidor publico
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main page content-->
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="account-profile.html">Perfil</a>
        <a class="nav-link" href="account-billing.html">Laboral</a>
    </nav>
    <hr class="mt-0 mb-4" />
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Foto de perfil</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{asset('libs/assets/img/illustrations/profiles/profile-1.png')}}" alt="" />
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG o PNG menor a  5 MB</div>
                    <!-- Profile picture upload button-->   
                </div>
            </div>
           
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Datos personales</div>
                <div class="card-body">
                    <form action="{{url('/trabajador')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Nombre Completo</label>
                            <input class="form-control" id="nombre_completo" name="nombre_completo" type="text" />
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Cédula </label>
                                <input class="form-control" id="cedula" name="cedula" type="text"  />
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Fecha Nacimietno</label>
                                <input class="form-control" id="fecha_nac" name="fecha_nac" type="date"  />
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Tipo de Sangre</label>
                                <select name="tipo_sangre" id="tipo_sangre" class="form-control">
                                    <option value="O negativo">O negativo</option>
                                    <option value="O positivo">O positivo</option>
                                    <option value="A negativo">A negativo</option>
                                    <option value="A positivo">A positivo</option>
                                    <option value="B negativo">B negativo</option>
                                    <option value="B positivo">B positivo</option>
                                    <option value="AB negativo">AB negativo</option>
                                    <option value="AB positivo">AB positivo</option>
                                </select>
                            
                            
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Email</label>
                                <input class="form-control" id="email" name="email" type="email" />
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Direccion</label>
                            <input class="form-control" id="direccion" name="direccion" type="text" />
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Estado Civil</label>
                                <select name="estado_civil" id="estado_civil" class="form-control">
                                    <option value="Soltero/a">Soltero/a</option>
                                    <option value="Casado/a">Casado/a</option>
                                    <option value="Divorciado/a">Divorciado/a</option>
                                    <option value="Viudo/a">Viudo/a</option>
                                   
                                </select>
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Nacionalidad</label>
                                <input class="form-control" id="nacionalidad" name="nacionalidad" type="text"  />
                            </div>
                        </div>

                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Num. Hijos</label>
                                <input class="form-control" id="n_hijos" name="n_hijos" type="number" min="0" />
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Telefono</label>
                                <input class="form-control" id="telefono" name="telefono" type="text" />
                            </div>
                        </div>

                        <input id="activo" name="activo" type="hidden" value="1">

                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Foto (Solo imagen)</label>
                                <input type="file" class="btn btn-primary" accept="image/*" id="foto" name="foto">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Curridulo (Solo PDF)</label>
                                <input type="file" class="btn btn-primary" accept="application/pdf"id="curriculo" name="curriculo">
                            </div>
                        </div>
                        
                       
                       
                        <!-- Save changes button-->
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection