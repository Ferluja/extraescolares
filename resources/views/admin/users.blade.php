@extends('layout.scaffold')
    <link rel="stylesheet" href={{asset('bootstrap/css/scaffold.css')}}>
    <link rel="stylesheet" href={{asset('bootstrap/css/registro.css')}}>
    <title>{{$titulo}}</title>
    <div class="container">
        <div class="row">
            <div class="col">
                @section('user')
                    <img src="{{asset('img/yamfer.png')}}" alt="Profile" class="rounded-circle shadow-lg my-4" width="150" height="150">
                    <h2 class="fs-5 fw-light mb-0" style="color: black">Usuario</h2>
                    <small class="text fw-bold" style="color: black">{{@session('nombre_usuario')}}</small>
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
                        <a href="{{route('listaUsuarios')}}" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-users me-2"></i>Lista usuarios</a>
                    </li>
                @endsection
                @section('main')
                    <div class="container-fluid">
                        <div class="row mt-4">
                            <div class="col-md">
                              <table class="table" id="tabla-registro">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Correo</th>
                                        <th>Actualizar contraseña</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($registros as $registro)
                                            
                                        <td>{{$registro->nombre}}</td>
                                        <td>{{$registro->email}}</td>
                                        <td>{{$registro->correo}}</td>
                                        <td><a href="#"><i class="fas fa-window-restore"></i></a></td>
                                        <td><a href="#" class="btn btn-warning">Editar</a></td>
                                        <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                @endsection
            </div>
        </div>
    </div>