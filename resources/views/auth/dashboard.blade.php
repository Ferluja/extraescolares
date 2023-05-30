@extends('layout.plantilla')
@section('titulo',$titulo)
@section('contenido')

<h1>{{@session('perfil')}}</h1>
<h2>{{@session('nombre_usuario')}}</h2>
@endsection
    
