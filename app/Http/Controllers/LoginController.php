<?php

namespace App\Http\Controllers;

use App\Models\DatosUsuarios;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        $titulo = "Login";
        return view('auth.login',compact('titulo'));
    }
    public function accesoLogin(Request $request){
        $titulo = 'Dashboard';
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ],
        [
            'name.required'=>'El campo usuario esta vacío',
            'password.required'=>'El campo contraseña esta vacío'
        ]);
        if(Auth::attempt(['email'=>$request->name,'password'=>$request->password])){
            $datos_usuarios = DatosUsuarios::where(['id_user'=>Auth::id()])->first();
            $nombre_completo = $datos_usuarios->nombre.' '.$datos_usuarios->apellido_paterno.' '.$datos_usuarios->apellido_materno;
            session(['nombre_usuario'=>$nombre_completo]);
            session(['perfil'=>$datos_usuarios->id_perfiles]);
            return view('auth.dashboard',compact('titulo'));
        }else{
            $request->session()->flash('css','danger');
            $request->session()->flash('mensaje','Las credenciales indicadas
            no son validas');
            return redirect()->route('login');
        }
    }
    public function nuevoAdmin(){

        User::create([
            'email'=> 'roldan',
            'password'=> Hash::make('1234')
        ]);
        return redirect()->route('login');
    }
}
