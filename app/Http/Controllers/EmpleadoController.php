<?php

namespace App\Http\Controllers;
use App\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function sacarempleados(){
        $datos = empleado::all();
        return view('empleados/index',['empleados'=>$datos]);
    }
}
