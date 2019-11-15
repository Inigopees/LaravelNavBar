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

    public function show(request $request){
        $id=$request->get('id');
        $datos = empleado::all()->where('id',$id);
        return view('empleados/empleado',['empleados'=>$datos]);
    }
}
