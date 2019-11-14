<?php

namespace App\Http\Controllers;
use App\departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function sacardepartamentos(){
        $datos = departamento::all();
        return view('departamentos/index',['departamentos'=>$datos]);
    } 
    
}
