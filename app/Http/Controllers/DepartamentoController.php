<?php

namespace App\Http\Controllers;
use App\departamentos;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function sacardepartamentos(){
        $datos = departamentos::all();
        return view('departamentos/index',['departamentos'=>$datos]);
    } 
    
}
