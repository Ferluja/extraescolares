@extends('layout/plantilla')
@section('titulo','Dashboard')
@section('contenido')

    <div class="btn-open-aside d-flex align-items-center justify-content-center rounded-circle position-absolute top-50 start-0 translate-middle d-none" id="btn_open_aside" title="Abrir panel"><i class="fa-solid fa-ellipsis-vertical ms-3"></i></div>
    <aside class="aside vh-100 position-fixed d-flex flex-column justify-content-between p-3" id="aside">
        <div class="btn-close-aside d-flex align-items-center justify-content-center rounded-circle position-absolute top-0 end-0 shadow m-2 bg-danger text-white" id="btn_close_aside" title="Cerrar panel">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="text-center">
            <div>
                <h1 class="fs-3 fw-bold mb-0">S.G.E</h1>
                <small class="text-muted">(Sistema de Gestión de Extraescolares)</small>
            </div>
            <div>
                @yield('user')
            </div>
        </div>
        <div class="h-100 my-4 overflow-auto">
            <ul class="nav">
                @yield('menu')
            </ul>
        </div>
        <div>
            <a href="{{ route('logout') }}" class="btn btn-light rounded-pill shadow w-100"><i class="fa-solid fa-power-off me-2"></i>Cerrar sesión</a>
        </div>
    </aside>
    <main class="main position-absolute p-3" id="main">
        @yield('main')
    </main>
@endsection
