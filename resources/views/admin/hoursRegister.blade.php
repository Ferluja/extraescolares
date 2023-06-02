@extends('layout.scaffold')
    <link rel="stylesheet" href={{asset('bootstrap/css/scaffold.css')}}>
    <link rel="stylesheet" href={{asset('bootstrap/css/hoursRegister.css')}}>
    <div class="container">
        <div class="row">
            <div class="col">
                @section('user')
                    <img src="https://images.pexels.com/photos/2726111/pexels-photo-2726111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" class="rounded-circle shadow-lg my-4" width="150" height="150">
                    <h2 class="fs-5 fw-light mb-0">Usuario</h2>
                    <small class="text-muted">{{@session('nombre_usuario')}}</small>
                @endsection
                @section('menu')
                    <li class="mb-2 w-100 mt-3">
                        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-layer-group me-2"></i>Mis creditos</a>
                    </li>
                    <li class="mb-2 w-100">
                        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-clock me-2"></i>Registrar horas</a>
                    </li>
                    <li class="mb-2 w-100">
                        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-user me-2"></i>Agregar usuario</a>
                    </li>
                @endsection
                @section('main')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 mt-4">
                                <a href="#" class="btn btn-success badge-container  d-flex align-items-center justify-content-center mx-auto">
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
                                <div class="card p-5 shadow border-0" style="width: 60rem; background-color: D0EACA">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-9">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <fieldset class="px-3 mb-3">
                                                        <legend class="fs-5 border-bottom mb-4">Datos Generales</legend>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control rounded-pill border border-success" id="name" name="name" placeholder="Nombre(s)">
                                                                    <label for="name" class="form-label"><i class="fa-solid fa-user me-2"></i>Nombre(s)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control rounded-pill border border-success" id="first_surname" name="first_surname" placeholder="Apellido paterno">
                                                                    <label for="first_surname" class="form-label"><i class="fa-solid fa-user me-2"></i>Apellido paterno</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control rounded-pill border border-success" id="second_surname" name="second_surname" placeholder="Apellido materno">
                                                                    <label for="second_surname" class="form-label"><i class="fa-solid fa-user me-2"></i>Apellido materno</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="px-3 mb-3">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select rounded-pill border border-success" placeholder="Carrera">
                                                                        <option value="null">Elegir carrera</option>
                                                                        <option value="isc">Ingeniería en sistema computacionales</option>
                                                                        <option value="ii">Ingeniería industrial</option>
                                                                        <option value="ige">Ingeniería en gestión empresarial</option>
                                                                    </select>
                                                                    <label for="carrera" class="form-label"><i class="fa-solid fa-graduation-cap me-2"></i>Carrera</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control rounded-pill border border-success" id="control_number" name="control_number" placeholder="Número de control">
                                                                    <label for="control_number" class="form-label"><i class="fa-solid fa-hashtag me-2"></i>Número de control</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>  
                                                    <fieldset class="px-3 mb-3">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control rounded-pill border border-success" id="evento" name="evento" placeholder="Evento">
                                                                    <label for="horas" class="form-label"><i class="fas fa-pen-square"></i> Nombre del evento</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-floating mb-3">
                                                                    <input class="form-control rounded-pill border border-success" type="file" id="formFile">
                                                                    <label for="" class="form-label p-2"> <i class="fas fa-photo-video"></i> Agregar evidencia</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset> 
                                                    <fieldset class="px-3 mb-3">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control rounded-pill border border-success" id="horas" name="horas" placeholder="Horas">
                                                                    <label for="horas" class="form-label"><i class="fas fa-clock"></i> Horas</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset> 
                                                </form>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex justify-content-end align-items-end" style="height: 300px">
                                                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Generar archivo</button>
                                                </div> 
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
                                            <th>Nombre</th>
                                            <th>Apellido paterno</th>
                                            <th>Apellido materno</th>
                                            <th>Carrera</th>
                                            <th>No.Control</th>
                                            <th>Nombre del evento</th>
                                            <th>Horas</th>
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
                    </div>
                </div>
                @endsection
            </div>
        </div>
    </div>