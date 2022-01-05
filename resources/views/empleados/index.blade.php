@extends('layouts.app')
@section('content')
<a href="{{url('empleado.create')}}">Crear Empleado</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
        <th>#</th>
        <th>Identificacion</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Email</th>
           <th>Acciones</th>
          
        </tr>
    </thead>
    <tbody>
       @foreach( $empleados as $empleado) 
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->identificacion}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellido}}</td>
            <td>{{$empleado->email}}</td>
            <td>

            <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('Quieres Borrar al Empelado ') " value="Borrar">
            </form>
            </td>
            <td>

            <form action="{{url('empleado.CreateHorario'.$empleado->id)}}" method="get">
            @csrf
            
            <input type="submit"   value="Crear Horario">
            </form>
            </td>

            <td>
            @csrf
            <form action="{{route('empleado.horario',[$empleado->id])}}" ,method="GET">
            
            
            <input type="submit"   value="Horario">
            </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
@endsection