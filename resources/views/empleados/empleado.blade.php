@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

@foreach($empleados as $empleado)
  <h2>Empleado {{$empleado->nombre}}:</h2>
@endforeach
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
      </tr>

      @foreach($empleados as $empleado)
      <tr>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
      </tr>
      @endforeach

    </table>

@endsection
