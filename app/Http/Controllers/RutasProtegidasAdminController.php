<?php

namespace App\Http\Controllers;

use App\Models\CatCarpetas;
use App\Models\CatCarreras;
use App\Models\CatCreditos;
use App\Models\DatosEscolares;
use App\Models\DatosUsuarios;
use App\Models\RegistroHoras;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\ValidaSelect;
use Illuminate\Support\Facades\DB;

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
    public function registrar_horas(){
        $titulo = 'Registrar Horas';
        $carreras = CatCarreras::all();
        $carpetas = CatCarpetas::all();
        $creditos = CatCreditos::all();
        $registros = DB::table('registro_horas')
        ->join('cat_carreras','cat_carreras.id','=','registro_horas.id_carrera')
        ->join('cat_creditos','cat_creditos.id','=','registro_horas.id_credito')
        ->join('cat_carpetas','cat_carpetas.id','=','registro_horas.id_carpeta')
        ->select('registro_horas.id','nombre','apellido_paterno','apellido_materno','cat_carreras.nombre_carrera'
        ,'numero_control','semestre','nombre_evento','path_evidencia','horas',
        'cat_creditos.nombre_credito','cat_carpetas.nombre_carpeta')->get();

        return view('admin.hoursRegister',compact('titulo','carreras','carpetas','creditos','registros'));
    }
    public function registrar_horas_post(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'carrera' => [new ValidaSelect],
            'numero_control' => 'required|numeric',
            'evento' => 'required',
            'evidencia' => 'required|mimes:pdf',
            'horas' => 'required|numeric',
            'credito'=> [new ValidaSelect],
            'carpeta' => [new ValidaSelect],
        ],
        [
            'nombre.required' => 'El campo nombre esta vacío',
            'apellido_paterno.required' => 'El campo apellido paterno esta vacío',
            'apellido_materno.required' => 'El campo apellido materno esta vaćio',
            'numero_control.required' => 'El campo numero de control esta vacío',
            'numero_control.numeric' => 'El campo numero de control solo acepta numeros',
            'evento.required' => 'El campo evento esta vacío',
            'evidencia.required' => 'El campo evidencia esta vacío',
            'evidencia.mimes' => 'Solo se aceptan archivos PDF en el campo evidencia',
            'horas.required' => 'El campo de horas esta vacío',
            'horas.numeric' => 'El campo horas solo acepta numeros',
        ]);
        
        
        switch ($_FILES['evidencia']['type']) {
            case 'application/pdf':
                $archivo = time()."pdf";
                break;
            
        }
        
        copy($_FILES['evidencia']['tmp_name'],'archivos/'.$archivo);
        RegistroHoras::create([
            'nombre'=>$request->nombre,
            'apellido_paterno'=>$request->apellido_paterno,
            'apellido_materno'=>$request->apellido_materno,
            'id_carrera'=>$request->carrera,
            'numero_control'=>$request->numero_control,
            'nombre_evento'=>$request->evento,

        ]);
        
        $request->session()->flash('css','success');
        $request->session()->flash('mensaje','Se guardo la informacion exitosamente');
        
        return redirect()->route('registrarHoras');
        
    }
    
    public function carpetas_post(Request $request){
        $item = new CatCarpetas();
        $item->nombre_carpeta = $request->nombre_carpeta;
        $item->save();
        if($request->viewSelect == 1){
        return redirect()->route('registrarHoras');
        }else{
            return redirect()->route('registrarCreditos',['id'=>$request->credito_id]);
        }
    }
    public function catCreditos(){
        $item = new CatCreditos();
        $item->nombre_credito = 'CIVICO';
        $item->save();
        $item = new CatCreditos();
        $item->nombre_credito = 'DEPORTIVO';
        $item->save();
        $item = new CatCreditos();
        $item->nombre_credito = 'CULTURAL';
        $item->save();
        return redirect()->route('dashboard');
    }
    public function registrar_creditos($id){
        $titulo = 'Registrar Creditos';
        $carreras = CatCarreras::all();
        $carpetas = CatCarpetas::all();
        $credito_seleccionado = CatCreditos::where(['id'=>$id])->select('id','nombre_credito')->first();

        return view('admin.credit',compact('titulo','carreras','credito_seleccionado','carpetas'));
    }
    
}
