<?php

namespace App\Http\Controllers;

use App\Models\RegistroHoras;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF($id){
        $datos = RegistroHoras::findOrFail($id);
        //print_r($datos);exit;
        if($datos->id_carrera == 1){
            $grupo = 'IGE';
        }else if($datos->id_carrera == 2){
            $grupo = 'SIS';
        }else{
            $grupo = 'IND';
        }

        //$fechaEntera = time();
        $fechaPrueba = $datos->created_at;
        $fecha = date('d-m-Y',strtotime($fechaPrueba));
        $mes = date("m", strtotime($fechaPrueba));
        //print_r($mes);exit;
        if($mes < 06){
            $periodo = 'Enero-Julio-'.date("Y",strtotime($fechaPrueba));
        }else{
            $periodo = 'Agosto-Diciembre-'.date("Y",strtotime($fechaPrueba));
        }
        if($datos->id_credito == 1){
            $credito = 'Civicas';
        }else if($datos->id_credito == 2){
            $credito = 'Deportivas';
        }else{
            $credito = 'Culturales';
        }
        
        
        
        $pdf = Pdf::loadView('admin.pdf', compact('datos', 'grupo','periodo','credito','fecha'));
        return $pdf->stream();
    }
}
