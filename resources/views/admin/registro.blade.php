@extends('layout.scaffold')
    <link rel="stylesheet" href={{asset('bootstrap/css/scaffold.css')}}>
    <link rel="stylesheet" href={{asset('bootstrap/css/registro.css')}}>
    <div class="container">
        <div class="row">
            <div class="col">
                @section('user')
                    <img src="{{asset('img/yamfer.png')}}" alt="Profile" class="rounded-circle shadow-lg my-4" width="150" height="150">
                    <h2 class="fs-5 fw-light mb-0">Usuario</h2>
                    <small class="text-muted">{{@session('nombre_usuario')}}</small>
                @endsection
                @section('menu')
                    <li class="mb-2 w-100 mt-3">
                        <a href="{{route('dashboard')}}" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-layer-group me-2"></i>Mis creditos</a>
                    </li>
                    <li class="mb-2 w-100">
                        <a href="{{route('registrarHoras')}}" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-clock me-2"></i>Registrar horas</a>
                    </li>
                    <li class="mb-2 w-100">
                        <a href="{{route('registro')}}" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-user me-2"></i>Agregar usuario</a>
                    </li>
                    <li class="mb-2 w-100">
                        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-users me-2"></i>Lista usuarios</a>
                    </li>
                @endsection
                @section('main')
                    <div class="container-fluid">
                        <div class="row justify-content-center" style="margin-left: 75px">
                            <div class="col-md">
                                <div class="card p-5 shadow border-0">
                                    <div class="card-body">
                                        <x-show_errors_validate></x-show_errors_validate>
                                        <br>
                                        <br>
                                        <form action="{{route('registroPost')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="profile-container pb-3">
                                                <div class="profile mx-auto" >
                                                    <img src="{{asset('img/yamfer.png')}}" alt="Profile" class="rounded-circle shadow d-flex align-items-center justify-content-center" style=" width: 100%; height: auto;" id="photo">
                                                </div>
                                            </div>
                                            <fieldset class="px-3 mb-3">
                                                <legend class="fs-5 border-bottom mb-4">Datos personales</legend>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-pill" id="nombre" name="nombre" placeholder="Nombre(s)" value="{{old('nombre')}}">
                                                            <label for="names" class="form-label"><i class="fa-solid fa-user me-2"></i>Nombre(s)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-pill" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido paterno" value="{{old('apellido_paterno')}}">
                                                            <label for="first_surname" class="form-label"><i class="fa-solid fa-user me-2"></i>Apellido paterno</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-pill" id="apellido_materno" name="apellido_materno" placeholder="Apellido materno" value="{{old('apellido_materno')}}">
                                                            <label for="second_surname" class="form-label"><i class="fa-solid fa-user me-2"></i>Apellido materno</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="email" class="form-control rounded-pill" id="correo" name="correo" placeholder="Correo electrónico" value="{{old('correo')}}">
                                                            <label for="email" class="form-label"><i class="fa-solid fa-envelope me-2"></i>Correo electrónico</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="date" class="form-control rounded-pill" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha nacimiento" value="{{old('fecha_nacimiento')}}">
                                                            <label for="birthday" class="form-label"><i class="fa-solid fa-calendar-days me-2"></i>Fecha nacimiento</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="tel" class="form-control rounded-pill" id="telefono" name="telefono" placeholder="Teléfono" value="{{old('telefono')}}">
                                                            <label for="phone_number" class="form-label"><i class="fa-solid fa-phone me-2"></i>Teléfono</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="px-3 mb-3">
                                                <legend class="fs-5 border-bottom mb-4">Datos escolares</legend>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-pill" id="numero_control" name="numero_control" placeholder="Número de control" value="{{old('numero_control')}}">
                                                            <label for="control_number" class="form-label"><i class="fa-solid fa-hashtag me-2"></i>Número de control</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-floating mb-3">
                                                            <select class="rounded-pill" id="career" name="career" placeholder="Carrera" hidden >
                                                                <option value="0">Elegir carrera</option>
                                                                @foreach ($carreras as $carrera)
                                                                    <option value="{{$carrera['id']}}">{{$carrera['nombre_carrera']}}</option>
                                                                @endforeach
                                                                
                                                            </select>
                                                            <input type="text" class="form-control rounded-pill" id="temp_career" placeholder="Carrera">
                                                            <label for="career" class="form-label"><i class="fa-solid fa-graduation-cap me-2"></i>Carrera</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="date" class="form-control rounded-pill" id="fecha_ingreso_tecnm" name="fecha_ingreso_tecnm" placeholder="Fecha de ingreso al TecNM" value="{{old('fecha_ingreso_tecnm')}}">
                                                            <label for="admission_day" class="form-label"><i class="fa-solid fa-calendar-days me-2"></i>Fecha de ingreso al TecNM</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-pill" id="escuela_procedencia" name="escuela_procedencia" placeholder="Escuela de procedencia" value="{{old('escuela_procedencia')}}">
                                                            <label for="school_origin" class="form-label"><i class="fa-solid fa-school-flag me-2"></i>Escuela de procedencia</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="px-3 mb-3">
                                                <legend class="fs-5 border-bottom mb-4">Datos de usuario</legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control rounded-pill" id="user" name="user" placeholder="Usuario" value="{{old('user')}}">
                                                            <label for="user" class="form-label"><i class="fa-solid fa-user me-2"></i>Usuario</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Contraseña" value="{{old('password')}}">
                                                            <label for="password" class="form-label"><i class="fa-solid fa-lock me-2"></i>Contraseña</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check form-switch my-4">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="show_hide_password">
                                                    <label class="form-check-label" for="show_hide_password" id="text_show_hide_password">Mostrar contraseña</label>
                                                </div>
                                            </fieldset>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-success rounded-pill" type="submit"><i class="fa-solid fa-user-plus me-2"></i>Registrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
            </div>
        </div>
    </div>