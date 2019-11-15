@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
@foreach($departamentos as $departamento)
  <h2>Departamento {{$departamento->nombre}}:</h2>
@endforeach
  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>

    @foreach($departamentos as $departamento)
      <tr>
        <td>{{$departamento->id}}</td>
        <td>{{$departamento->nombre}}</td>
      </tr>
    @endforeach
  </table>

@endsection
