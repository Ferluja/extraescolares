<?php

namespace App\Http\Controllers;

use App\Models\CatCarreras;
use App\Models\DatosEscolares;
use App\Models\DatosUsuarios;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\ValidaSelect;

class RutasProtegidasAdminController extends Controller
{
    public function __construct(){
        $this->middleware('acceso');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function registro(){
        $titulo = 'Registro';
        $carreras = CatCarreras::all();
        return view('admin.registro',compact('titulo','carreras'));
    }
    public function registro_post(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'correo' => 'required|email:rfc,dns',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required',
            'numero_control' => 'required',
            'career' => [new ValidaSelect],
            'fecha_ingreso_tecnm' => 'required|date',
            'escuela_procedencia' => 'required',
            'user' => 'required',
            'password' => 'required|min:8'
            
        ],
        [
            'nombre.required' => 'El campo de nombre es vacío',
            'apellido_paterno.required' => 'El campo de apellido paterno es vacío',
            'apellido_materno.required' => 'El campo de apellido materno es vacío',
            'correo.required' => 'El campo de correo es vacío',
            'correo.email' => 'El correo ingresado no es válido',
            'fecha_nacimiento.required' => 'El campo de fecha de nacimiento esta vacío',
            'fecha_nacimiento.date' => 'La fecha de nacimiento no es valida',
            'telefono.required' => 'El campo de telefono es vacío',
            'numero_control.required' => 'El campo numero de control esta vacío',
            'fecha_ingreso_tecnm.required' => 'El campo de fecha de ingreso al TECNM esta vacío',
            'fecha_ingreso_tecnm.date' => 'La fecha de ingreso no tiene un formato valido',
            'escuela_procedencia.required' => 'El campo de escuela de procedencia es vacío',
            'user.required' => 'El campo de usuario esta vacío',
            'password.required' => 'El campo de contraseña esta vacío',
            'password.min' => 'El campo contraseña debe tener al menos 8 digitos',
            
        ]);
        $users = User::create([
            'email' => $request->user,
            'password' => $request->password
        ]);
        $datos_escolares = DatosEscolares::create([
            'escuela_procedencia' => $request->escuela_procedencia,
            'fecha_ingreso_tecnm' => $request->fecha_ingreso_tecnm,
            'id_carrera' => $request->career,
            'numero_control' => $request->numero_control
        ]);
        DatosUsuarios::create([
            'telefono' => $request->telefono,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'correo' => $request->correo,
            'apellido_materno' => $request->apellido_materno,
            'apellido_paterno' => $request->apellido_paterno,
            'nombre' => $request->nombre,
            'id_perfiles' => 1,
            'id_user' => $users->id,
            'id_datos_escolares' => $datos_escolares->id
        ]);
        return redirect()->route('dashboard');

    }    
}
