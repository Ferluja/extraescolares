@extends('layout.scaffold')
<link rel="stylesheet" href={{ asset('bootstrap/css/scaffold.css') }}>
<link rel="stylesheet" href={{ asset('bootstrap/css/credit.css') }}>
<link rel="stylesheet" href={{ asset('bootstrap/css/signup.css') }}>
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
                    <a href="{{route('dashboard')}}" class="btn btn-light rounded-pill text-start w-100"><i
                            class="fa-solid fa-layer-group me-2"></i>Mis creditos</a>
                </li>
                <li class="mb-2 w-100">
                    <a href="{{route('registrarHoras')}}" class="btn btn-light rounded-pill text-start w-100"><i
                            class="fa-solid fa-clock me-2"></i>Registrar horas</a>
                </li>
                <li class="mb-2 w-100">
                    <a href="{{route('registro')}}" class="btn btn-light rounded-pill text-start w-100"><i
                            class="fa-solid fa-user me-2"></i>Agregar usuario</a>
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
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="width: 60rem">
                                            <button class="btn btn-success">Credito seleccionado</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card p-5 shadow border-0 mt-2" style="width: 60rem; background-color: D0EACA">
                                    <div class="card-body">
                                        <h5>Sube tus evidencias o constancias en su area correspondiente.</h5>
                                        <div class="row g-3 mt-4">
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
                                                <div class="bg-success d-flex align-items-center justify-content-center"
                                                    style="width: 200px; height: 150px;">
                                                    <label for="taller" class="text-white" title="Subir foto"><i
                                                            class="fa-solid fa-puzzle-piece fa-5x"></i></label>
                                                    <input type="file" id="taller" name="taller" hidden>
                                                </div>
                                                <div class="text-center mt-2">
                                                    TALLER
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="px-3 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="name" name="name" placeholder="Nombre(s)">
                                                                <label for="name" class="form-label"><i
                                                                        class="fa-solid fa-user me-2"></i>Nombre(s)</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="first_surname" name="first_surname"
                                                                    placeholder="Apellido paterno">
                                                                <label for="first_surname" class="form-label"><i
                                                                        class="fa-solid fa-user me-2"></i>Apellido
                                                                    paterno</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="second_surname" name="second_surname"
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
                                                        <div class="col-md-4">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control rounded-pill border border-success"
                                                                    id="control_number" name="control_number"
                                                                    placeholder="Número de control">
                                                                <label for="control_number" class="form-label"><i
                                                                        class="fa-solid fa-hashtag me-2"></i>Número de
                                                                    control</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-floating mb-3">
                                                                <select
                                                                    class="form-select rounded-pill border border-success"
                                                                    placeholder="Carrera">
                                                                    <option value="null">Elegir carrera</option>
                                                                    <option value="isc">Ingeniería en sistema
                                                                        computacionales</option>
                                                                    <option value="ii">Ingeniería industrial</option>
                                                                    <option value="ige">Ingeniería en gestión
                                                                        empresarial</option>
                                                                </select>
                                                                <label for="carrera" class="form-label"><i
                                                                        class="fa-solid fa-graduation-cap me-2"></i>Carrera</label>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center align-items-center mt-4">
                                                            <button class="btn btn-primary"><i
                                                                    class="fa-solid fa-upload me-2"></i> Subir
                                                                archivo</button>
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
            <table class="table" style="background-color: D0EACA">
                <thead>
                    <tr>
                        <th>No.Control</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Credito</th>
                        <th>Carrera</th>
                        <th>Mooc</th>
                        <th>Taller</th>
                        <th>Generar oficio</th>
                        <th>Ubicación fisica</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
</div>
</div>
</div>
