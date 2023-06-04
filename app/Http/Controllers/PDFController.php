<?php

namespace App\Http\Controllers;

use App\Models\DatosEscolares;
use App\Models\DatosUsuarios;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $datosEscolares = DatosEscolares::all();
        $datosUsuarios = DatosUsuarios::all();
        $pdf = Pdf::loadView('admin.pdf', compact('datosEscolares', 'datosUsuarios'));
        return $pdf->stream();
    }
}
