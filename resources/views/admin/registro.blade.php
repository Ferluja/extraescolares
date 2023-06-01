@extends('layout.plantilla')
@section('contenido')
<link rel="stylesheet" href={{asset('bootstrap/css/registro.css')}}>
<link rel="stylesheet" href={{asset('bootstrap/css/signup.css')}}>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3 shadow border-0">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-container pb-3">
                            <div class="profile mx-auto" >
                                <img src="https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-user-vector.jpg" alt="Profile" class="rounded-circle shadow" id="photo" >
                                <div  class="photo_profile_container bg-success d-flex align-items-center justify-content-center rounded-circle">
                                    <label for="photo_profile" class="text-white" title="Subir foto" ><i class="fa-solid fa-camera"></i></label>
                                    <input type="file" id="photo_profile" name="photo_profile"  hidden>
                                </div>
                            </div>
                        </div>
                        <fieldset class="px-3 mb-3">
                            <legend class="fs-5 border-bottom mb-4">Datos personales</legend>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-pill" id="names" name="names" placeholder="Nombre(s)">
                                        <label for="names" class="form-label"><i class="fa-solid fa-user me-2"></i>Nombre(s)</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-pill" id="first_surname" name="first_surname" placeholder="Apellido paterno">
                                        <label for="first_surname" class="form-label"><i class="fa-solid fa-user me-2"></i>Apellido paterno</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-pill" id="second_surname" name="second_surname" placeholder="Apellido materno">
                                        <label for="second_surname" class="form-label"><i class="fa-solid fa-user me-2"></i>Apellido materno</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Correo electrónico">
                                        <label for="email" class="form-label"><i class="fa-solid fa-envelope me-2"></i>Correo electrónico</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-pill" id="birthday" name="birthday" placeholder="Fecha nacimiento">
                                        <label for="birthday" class="form-label"><i class="fa-solid fa-calendar-days me-2"></i>Fecha nacimiento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control rounded-pill" id="phone_number" name="phone_number" placeholder="Teléfono">
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
                                        <input type="text" class="form-control rounded-pill" id="control_number" name="control_number" placeholder="Número de control">
                                        <label for="control_number" class="form-label"><i class="fa-solid fa-hashtag me-2"></i>Número de control</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-floating mb-3">
                                        <select class="rounded-pill" id="career" name="career" placeholder="Carrera" hidden>
                                            <option value="null">Elegir carrera</option>
                                            <option value="isc">Ingeniería en sistema computacionales</option>
                                            <option value="ii">Ingeniería industrial</option>
                                            <option value="ige">Ingeniería en gestión empresarial</option>
                                        </select>
                                        <input type="text" class="form-control rounded-pill" id="temp_career" placeholder="Carrera">
                                        <label for="career" class="form-label"><i class="fa-solid fa-graduation-cap me-2"></i>Carrera</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-pill" id="admission_day" name="admission_day" placeholder="Fecha de ingreso al TecNM">
                                        <label for="admission_day" class="form-label"><i class="fa-solid fa-calendar-days me-2"></i>Fecha de ingreso al TecNM</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-pill" id="school_origin" name="school_origin" placeholder="Escuela de procedencia">
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
                                        <input type="text" class="form-control rounded-pill" id="user" name="user" placeholder="Usuario">
                                        <label for="user" class="form-label"><i class="fa-solid fa-user me-2"></i>Usuario</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Contraseña">
                                        <label for="password" class="form-label"><i class="fa-solid fa-lock me-2"></i>Contraseña</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check form-switch my-4">
                                <input class="form-check-input" type="checkbox" role="switch" id="show_hide_password">
                                <label class="form-check-label" for="show_hide_password" id="text_show_hide_password">Mostrar contraseña</label>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-success w-100 rounded-pill"><i class="fa-solid fa-user-plus me-2"></i>Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src={{asset('bootstrap/js/signup.js')}}></script>
@endsection