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
    
    public function show(request $request){
        $id=$request->get('id');
        $datos = departamento::all()->where('id',$id);
        return view('departamentos/departamento',['departamentos'=>$datos]);
    }
}
