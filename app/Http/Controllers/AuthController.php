<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login(){
        //si ya estas autentificado ya no te deja entrar a login
        if (Auth::check()) {
            return redirect()->route('login');
        }
        return view('auth/login');
    }
    //fatlta crear carpeta y archivo para cada rol 
    public function logear(Request $request){
        //validar la parte de credenciales usuario y password
        $credenciales = $request->only("user", "password");
        if (Auth::attempt($credenciales)) {
            if ( auth()->user()->rol == 'admin') {
                return redirect()->route('admin_index');
            } else if(auth()->user()->rol == 'servicio') {
                return redirect()->route('servicio_index');
            } else if(auth()->user()->rol == 'estudiante'){
                return redirect()->route('estiduante_index');
            }else {
                return $this->logout();
            }
        } else {
            return back()->withInput($credenciales);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');     
    }
    public function nuevoUsuario(Request $request){
        $item = new User();
        $item->name = $request->name;
        $item->password = Hash::make($request->password) ;
        $item->save();
        return redirect('/login');
    }
}
