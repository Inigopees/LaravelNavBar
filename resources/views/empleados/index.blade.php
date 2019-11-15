@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
      </tr>

      @foreach($empleados as $empleado)
      <tr>
        <td>{{$empleado->id}}</a></td>
        <td><a href="{{route('empleado',['id' => $empleado->id])}}">{{$empleado->nombre}}</a></td>
      </tr>
      @endforeach

    </table>

@endsection
