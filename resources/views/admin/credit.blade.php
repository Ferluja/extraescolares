@extends('layout.scaffold')
<title>{{ $titulo }}</title>
<link rel="stylesheet" href={{ asset('bootstrap/css/scaffold.css') }}>
<link rel="stylesheet" href={{ asset('bootstrap/css/credit.css') }}>
<link rel="stylesheet" href={{ asset('bootstrap/css/signup.css') }}>
<div class="container">
    <div class="row">
        <div class="col">
            @section('user')
                <img src="https://images.pexels.com/photos/2726111/pexels-photo-2726111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Profile" class="rounded-circle shadow-lg my-4" width="150" height="150">
                <h2 class="fs-5 fw-light mb-0" style="color: black">Usuario</h2>
                <small class="text fw-bold" style="color: black">{{ @session('nombre_usuario') }}</small>
            @endsection
            @section('menu')
                <li class="mb-2 w-100 mt-3">
                    <a href="{{ route('dashboard') }}" class="btn btn-light rounded-pill text-start w-100"><i
                            class="fa-solid fa-layer-group me-2"></i>Mis creditos</a>
                </li>
                <li class="mb-2 w-100">
                    <a href="{{ route('registrarHoras') }}" class="btn btn-light rounded-pill text-start w-100"><i
                            class="fa-solid fa-clock me-2"></i>Registrar horas</a>
                </li>
                <li class="mb-2 w-100">
                    <a href="{{ route('registro') }}" class="btn btn-light rounded-pill text-start w-100"><i
                            class="fa-solid fa-user me-2"></i>Agregar usuario</a>
                </li>
                <li class="mb-2 w-100">
                    <a href="{{route('listaUsuarios')}}" class="btn btn-light rounded-pill text-start w-100"><i
                            class="fa-solid fa-users me-2"></i>Lista usuarios</a>
                </li>
            @endsection
            @section('main')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 mt-4">
                            <a href="#"
                                class="btn btn-success badge-container  d-flex align-items-center justify-content-center mx-auto">
                                <i class="fa-solid fa-medal fa-5x icon-deportivo"></i>
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-center">Bienvenido</h2>
                            <hr>
                            <h5>Recuerda que para poder liberar este crédito necesitas:</h5>
                            <li>MOOC (constancia)</li>
                            <li>Taller en que participaste.
                            <li>Datos del estudiante(nombre completo,ciclo escolar, carrera</li>
                            y fotos de evidencia).</li>
                            <li>Todo debe de estar en formato PDF.</li>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md">
                            <x-flash></x-flash>
                            <x-show_errors_validate></x-show_errors_validate>
                            <form action="{{route('registrarCreditosPost')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-success">{{ $credito_seleccionado->nombre_credito }}</button>
                                            <input type="number" name="id_credito" value="{{$credito_seleccionado->id}}" hidden>
                                        </div>
                                    </div>

                                </div>
                                <div class="card p-5 shadow border-0 mt-2" style="background-color: D0EACA">
                                    <div class="card-body">
                                        <h5>Sube tus evidencias o constancias en su area correspondiente.</h5>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="bg-success d-flex align-items-center justify-content-center"
                                                        style="width: 200px; height: 150px;">
                                                        <label for="mooc" class="text-white" title="Subir mooc"><i
                                                                class="fa-solid fa-brain fa-5x"></i></label>
                                                        <input type="file" id="mooc" name="mooc" hidden>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-2">
                                                    MOOC
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="bg-success d-flex align-items-center justify-content-center"
                                                        style="width: 200px; height: 150px;">
                                                        <label for="taller" class="text-white" title="Subir foto"><i
                                                                class="fa-solid fa-puzzle-piece fa-5x"></i></label>
                                                        <input type="file" id="taller" name="taller" hidden>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-2">
                                                    TALLER
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="px-3 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="nombre" name="nombre" placeholder="Nombre(s)">
                                                                <label for="name" class="form-label"><i
                                                                        class="fa-solid fa-user me-2"></i>Nombre(s)</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="apellido_paterno" name="apellido_paterno"
                                                                    placeholder="Apellido paterno">
                                                                <label for="first_surname" class="form-label"><i
                                                                        class="fa-solid fa-user me-2"></i>Apellido
                                                                    paterno</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="apellido_materno" name="apellido_materno"
                                                                    placeholder="Apellido materno">
                                                                <label for="second_surname" class="form-label"><i
                                                                        class="fa-solid fa-user me-2"></i>Apellido
                                                                    materno</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="px-3 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="numero_control" name="numero_control"
                                                                    placeholder="Número de control">
                                                                <label for="control_number" class="form-label"><i
                                                                        class="fa-solid fa-hashtag me-2"></i>Número de
                                                                    control</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="form-floating mb-3">
                                                                <select
                                                                    class="form-select rounded-pill border border-success"
                                                                    placeholder="Carrera" name="carrera">
                                                                    <option value="0">Elegir carrera</option>
                                                                    @foreach ($carreras as $carrera)
                                                                        <option value="{{ $carrera->id }}">
                                                                            {{ $carrera->nombre_carrera }}</option>
                                                                    @endforeach

                                                                </select>
                                                                <label for="carrera" class="form-label"><i
                                                                        class="fa-solid fa-graduation-cap me-2"></i>Carrera</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3">    
                                                                <select
                                                                class="form-select rounded-pill border border-success"
                                                                placeholder="Carpeta" name="carpeta">
                                                                <option value="0" selected>Elegir carpeta</option>
                                                                @foreach ($carpetas as $carpeta)
                                                                    <option value="{{ $carpeta->id }}">
                                                                        {{ $carpeta->nombre_carpeta }}</option>
                                                                @endforeach
                                                            </select>
                                                            <label for="carrera" class="form-label"><i
                                                                    class="fas fa-folder me-2"></i>Carpeta</label>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <a href="#" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#carpeta"><i
                                                                        class="fa-solid fa-plus me-2"></i> Agregar
                                                                    Carpeta</a> 
                                                        </div>
                                                        <div class="col">
                                                            <div class="d-flex justify-content-center align-items-center mt-4">
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-solid fa-upload me-2"></i> Subir
                                                                        archivo
                                                                </button>   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card" style="width: 55rem;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="tabla-registro"style="border: 1ch">
                            <thead>
                                <tr>
                                    <th hidden>Id</th>
                                    <th>No.Control</th>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Credito</th>
                                    <th>Carrera</th>
                                    <th>Mooc</th>
                                    <th>Taller</th>
                                    <th>Ubicación fisica</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($registros as $registro)
                                        
                                    
                                    <td hidden>{{$registro->id}}</td>
                                    <td>{{$registro->numero_control}}</td>
                                    <td>{{$registro->nombre}}</td>
                                    <td>{{$registro->apellido_paterno}}</td>
                                    <td>{{$registro->apellido_materno}}</td>
                                    <td>{{$registro->nombre_credito}}</td>
                                    <td>{{$registro->nombre_carrera}}</td>
                                    <td><a href="{{ route('viewPDF', ['path'=>$registro->path_mooc]) }}" target="_blank"><i class="fas fa-eye"></i></a></td>
                                    <td><a href="{{ route('viewPDF', ['path'=>$registro->path_taller]) }}" target="_blank"><i class="fas fa-eye"></i></a></td>
                                    <td>{{$registro->nombre_carpeta}}</td>
                                    <td><a href="#" class="btn btn-warning">Editar</a></td>
                                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="carpeta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Carpeta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('carpetasPost')}}" method="post">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" name="viewSelect" value="2" hidden>
                            <input type="number" name="credito_id" value="{{$credito_seleccionado->id}}" hidden>
                            <input type="text" class="form-control rounded-pill border border-success"
                                id="nombre_carpeta" name="nombre_carpeta" placeholder="Nombre De Carpeta">
                            <label for="first_surname" class="form-label"><i class="fas fa-folder me-2"></i>Nombre de
                                carpeta fisica</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>

</div>

</div>

</div>
