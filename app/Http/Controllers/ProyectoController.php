<?php

namespace App\Http\Controllers;
use App\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = proyecto::all();
        return view('proyectos.index',['proyectos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validación
        $project = new Proyecto;
        $project->nombre=$request->nombre;
        $project->titulo=$request->titulo;
        $project->fechainicio=$request->fechainicio;
        $project->fechafin=$request->fechafin;
        $project->horaestimada=$request->horaestimada;
        $project->save();
        return redirect(route('proyectos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project=Proyecto::find($id);
        return view('proyectos.show',['projecto'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=Proyecto::where('id',$id)->get();
        return view('proyectos.CuestProyecto',['proyectos'=>$project,'accion'=>'editar']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'fechainicio' => 'required ' ,
            'fechafin' => 'required min:fechainicio' ,
            'horas' => 'required' 
        ]);
        $project=Proyecto::where('id',$id)->update($request->all());
        return view('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Proyecto::destroy('id',$id);
    }
}
