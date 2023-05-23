@extends('layout.plantilla')
@section('contenido')
<link rel="stylesheet" href={{asset('bootstrap/css/signup.css')}}>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card p-3 shadow border-0">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-container pb-3">
                            <div class="profile mx-auto">
                                <img src="https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-user-vector.jpg" alt="Profile" class="rounded-circle shadow" id="photo" width="242px" height="241px">
                                <div class="photo_profile_container bg-success d-flex align-items-center justify-content-center rounded-circle">
                                    <label for="photo_profile" class="text-white" title="Subir foto"><i class="fa-solid fa-camera"></i></label>
                                    <input type="file" id="photo_profile" name="photo_profile" hidden>
                                </div>
                            </div>
                        </div>
                        <fieldset class="px-3 mb-3">
                            <legend class="fs-5 border-bottom mb-4 text-center">Agregar Usuario</legend>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-pill" id="complete_name" name="complete_name" placeholder="Nombre Completo">
                                        <label for="complete_name" class="form-label"><i class="fa-solid fa-file-signature"></i> Nombre Completo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Correo electrónico">
                                        <label for="email" class="form-label"><i class="fa-solid fa-envelope me-2"></i>Correo electrónico</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row mb-4">
                                    <div class="col-md-6 mt-2">
                                        <div>
                                            <div class="form-floating">
                                                <input type="text" class="form-control  rounded-pill" id="user" name="user" placeholder="Usuario">
                                                <label for="user" class="form-label"><i class="fa-solid fa-user"></i> Usuario</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mt-2">
                                        <div class="form-floating">
                                            <input type="password" class="form-control  rounded-pill" id="password" name="pasword" placeholder="Contraseña">
                                            <label for="password" class="form-label"><i class="fa-solid fa-lock"></i> Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="px-3 mb-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-floating mb-3">
                                        <select class="rounded-pill" id="rol" name="rol" placeholder="Rol" hidden>
                                            <option value="null">Elegir Rol</option>
                                            <option value="admin">Administrador</option>
                                            <option value="servicio">Servicio</option>
                                            <option value="estudiante">Estudiante</option>
                                        </select>
                                        <input type="text" class="form-control rounded-pill" id="temp_rol" placeholder="Rol">
                                        <label for="rol" class="form-label"><i class="fa-solid fa-users"></i> Rol</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check form-switch my-4">
                                <input class="form-check-input" type="checkbox" role="switch" id="show_hide_password">
                                <label class="form-check-label" for="show_hide_password" id="text_show_hide_password">Mostrar contraseña</label>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill"><i class="fa-solid fa-plus"></i> Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src={{asset('bootstrap/js/agregar.js')}}></script>
@endsection