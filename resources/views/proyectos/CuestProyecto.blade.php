@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
    @if($accion=='insertar')
        <h2>Insertar Proyecto</h2>
            <form action="{{route(proyectos.update)}}" method="post">
                <label>Nombre : </label><br>
                <input type="text" name="nombre"/><br>
                <label>Titulo : </label><br>
                <input type="text" name="titulo"/><br>
                <label>Fecha Inicio : </label><br>
                <input type="date" name="fechainicio"/><br>
                <label>Fecha Fin : </label><br>
                <input type="date" name="fechafin"/><br>
                <label>Horas estimadas : </label><br>
                <input type="number" name="horas"/><br>
                <input type="submit" name="insertar" value="insertar"/>
            </form>
    @else
        @foreach($proyectos as $proyecto)
            <h2>Modificar Proyecto</h2>
                <form action="{{route('proyectos.update',$proyecto->id)}}" method="put">
                @csrf
                @method('PATCH')
                    <label>Nombre : </label><br>
                    <input type="text" name="nombre" id="nombre" placeholder="{{$proyecto->nombre}}" readonly/><br>
                    <label>Titulo : </label><br>
                    <input type="text" name="titulo" id="titulo" placeholder="{{$proyecto->titulo}}"/><br>
                    <label>Fecha Inicio : </label><br>
                    <input type="date" name="fechainicio" id="fechainicio" placeholder="{{$proyecto->fechainicio}}"/><br>
                    <label>Fecha Fin : </label><br>
                    <input type="date" name="fechafin" id="fechafin" placeholder="{{$proyecto->fechafin}}"/><br>
                    <label>Horas estimadas : </label><br>
                    <input type="number" name="horas" id="horas" placeholder="{{$proyecto->horasestimadas}}"/><br>
                    <input type="submit" name="cambiar" value="Cambiar"/>
                </form>
        @endforeach  
    @endif
@endsection
