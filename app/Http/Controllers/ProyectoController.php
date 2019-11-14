<?php

namespace App\Http\Controllers;
use App\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function sacarproyectos(){
        $datos = proyecto::all();
        return view('proyectos/index',['proyectos'=>$datos]);
    }
}
