@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
  <a href="" style="float:right">Insertar Proyecto</a>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
      </tr>

      @foreach($proyectos as $proyecto)
      <tr>
        <td>{{$proyecto->id}}</td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td><a href="{{route('proyectos.edit',$proyecto->id)}}">Editar</a></td>
        <td><a href="{{route('proyectos.destroy',$proyecto->id)}}">Eliminar</a></td>
      </tr>
      @endforeach
      
    </table>

@endsection
