@extends('layouts.app')
@section('content')
{{$empleados->nombre}} 
{{$empleados->apellido}}  

<a href="{{url('home')}}">Volver</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
        <th>#</th>
        <th>Fecha</th>
        <th>Hora LLegada</th>
        <th>Hora Salida</th>
           
          
          
        </tr>
    </thead>
    <tbody>
       @foreach( $horarios as $horario) 
        <tr>
            <td>{{$horario->id}}</td>
            <td>{{$horario->fecha}}</td>
            <td>{{$horario->hora_llegada}}</td>
            <td>{{$horario->hora_salida}}</td>
            <td>


            <form action="{{url('/empleado.horario'.$horario->id)}}" method="post">
            @csrf 
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('quieres borrar') " value="Borrar">
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