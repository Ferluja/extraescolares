@extends('layout.scaffold')
<title>{{ $titulo }}</title>
<link rel="stylesheet" href={{ asset('bootstrap/css/scaffold.css') }}>
<link rel="stylesheet" href={{ asset('bootstrap/css/hoursRegister.css') }}>
<div class="container">
    <div class="row">
        <div class="col">
            @section('user')
                <img src="https://images.pexels.com/photos/2726111/pexels-photo-2726111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Profile" class="rounded-circle shadow-lg my-4" width="150" height="150">
                <h2 class="fs-5 fw-light mb-0">Usuario</h2>
                <small class="text-muted">{{ @session('nombre_usuario') }}</small>
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
                    <a href="#" class="btn btn-light rounded-pill text-start w-100"><i
                            class="fa-solid fa-users me-2"></i>Lista usuarios</a>
                </li>
            @endsection
            @section('main')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 mt-4">
                            <a href="#"
                                class="btn btn-success badge-container  d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-clock fa-5x icon-deportivo"></i>
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-center">Registrar horas</h2>
                            <hr>
                            <h5>Registra la participación de tus actividades o eventos</h5>
                            <li>Eventos en el que participaste.</li>
                            <li>Evidencias o constancia.</li>
                            <li>Todo en formato PDF.</li>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md">
                            <div class="card p-5 shadow border-0">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md">
                                            <x-show_errors_validate></x-show_errors_validate>
                                            <form action="{{ route('registrarHorasPost') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('POST')
                                                <fieldset class="px-3 mb-3">
                                                    <legend class="fs-5 border-bottom mb-4">Datos Generales</legend>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="nombre" name="nombre" placeholder="Nombre(s)"
                                                                    value="{{ old('nombre') }}">
                                                                <label for="name" class="form-label"><i
                                                                        class="fa-solid fa-user me-2"></i>Nombre(s)</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="apellido_paterno" name="apellido_paterno"
                                                                    placeholder="Apellido paterno"
                                                                    value="{{ old('apellido_paterno') }}">
                                                                <label for="first_surname" class="form-label"><i
                                                                        class="fa-solid fa-user me-2"></i>Apellido
                                                                    paterno</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="apellido_materno" name="apellido_materno"
                                                                    placeholder="Apellido materno"
                                                                    value="{{ old('apellido_materno') }}">
                                                                <label for="second_surname" class="form-label"><i
                                                                        class="fa-solid fa-user me-2"></i>Apellido
                                                                    materno</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="px-3 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-8">
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
                                                        <div class="col-md-4">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="numero_control" name="numero_control"
                                                                    placeholder="Número de control"
                                                                    value="{{ old('numero_control') }}">
                                                                <label for="control_number" class="form-label"><i
                                                                        class="fa-solid fa-hashtag me-2"></i>Número de
                                                                    control</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="px-3 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="evento" name="evento" placeholder="Evento"
                                                                    value="{{ old('evento') }}">
                                                                <label for="horas" class="form-label"><i
                                                                        class="fas fa-pen-square"></i> Nombre del
                                                                    evento</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="horas" name="horas" placeholder="Horas"
                                                                    value="{{ old('horas') }}">
                                                                <label for="horas" class="form-label"><i
                                                                        class="fas fa-clock"></i> Horas</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="px-3 mb-3">
                                                    <div class="row">
                                                        <div class="col-md">
                                                            <div class="form-floating mb-3">
                                                                <input
                                                                    class="form-control rounded-pill border border-success"
                                                                    type="file" id="evidencia" name="evidencia"
                                                                    value="{{ old('evidencia') }}">
                                                                <label for="" class="form-label p-2"> <i
                                                                        class="fas fa-photo-video"></i> Agregar
                                                                    evidencia</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-floating mb-3">
                                                                <select
                                                                    class="form-select rounded-pill border border-success"
                                                                    placeholder="Credito" name="credito">
                                                                    <option value="0" selected>Elegir credito</option>
                                                                    @foreach ($creditos as $credito)
                                                                        <option value="{{ $credito->id }}">
                                                                            {{ $credito->nombre_credito }}</option>
                                                                    @endforeach

                                                                </select>
                                                                <label for="carrera" class="form-label"><i
                                                                        class="fas fa-file-alt me-2"></i>Credito</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
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

                                                            <button class="btn btn-primary mt-2" type="submit"><i
                                                                    class="fas fa-plus"></i>Guardar</button>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-floating mb-3">
                                                                <div
                                                                    class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">

                                                                    <a href="#" class="btn btn-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#carpeta"><i
                                                                            class="fa-solid fa-plus"></i> Agregar
                                                                        Carpeta</a>
                                                                </div>
                                                            </div>   
                                                    </fieldset>
                                                </form>
                                                <x-flash></x-flash>
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
                                            <table class="table" id="tabla-registro" style="border: 1ch">
                                                <thead>
                                                    <tr>
                                                        <th hidden>Id</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido paterno</th>
                                                        <th>Apellido materno</th>
                                                        <th>Carrera</th>
                                                        <th>No.Control</th>
                                                        <th>Nombre del evento</th>
                                                        <th>Evidencias</th>
                                                        <th>Horas</th>
                                                        <th>Credito</th>
                                                        <th>Generar oficio</th>
                                                        <th>Ubicación fisica</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach ($registros as $registro)
                                                        <td hidden>{{$registro->id}}</td>
                                                        <td>{{$registro->nombre}}</td>
                                                        <td>{{$registro->apellido_paterno}}</td>
                                                        <td>{{$registro->apellido_materno}}</td>
                                                        <td>{{$registro->nombre_carrera}}</td>
                                                        <td>{{$registro->numero_control}}</td>
                                                        <td>{{$registro->semestre}}</td>
                                                        <td>{{$registro->nombre_evento}}</td>
                                                        <td>{{$registro->path_evidencia}}</td>
                                                        <td>{{$registro->horas}}</td>
                                                        <td>{{$registro->nombre_credito}}</td>
                                                        <td>{{}}</td>
                                                        <td>{{$registro->nombre_carpeta}}</td>
                                                        <td><a href="#" class="btn-warning">Editar</a></td>
                                                        <td><a href="#" class="btn-danger">Eliminar</a></td>
                                                        @endforeach
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="carpeta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Carpeta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('carpetasPost', ['id'=>1]) }}" method="post">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" name="viewSelect" value="1" hidden>
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
