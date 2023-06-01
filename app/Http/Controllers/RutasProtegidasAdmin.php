<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasProtegidasAdmin extends Controller
{
    public function __construct(){
        $this->middleware('acceso');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    
    
}
