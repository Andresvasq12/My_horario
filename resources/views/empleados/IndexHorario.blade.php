@extends('layouts.app')
@section('content')
<h1 class="border text-dark">Horario de {{$empleados->nombre}} 
{{$empleados->apellido}}  
</h1>
<div class="table-responsive">
<table class="table table-light">
    <thead class="thead-light">
        <tr>
       
        <th>Fecha</th>
        <th>Hora LLegada</th>
        <th>Hora Salida</th>
           
          
          
        </tr>
    </thead>
    <tbody>
       @foreach( $horarios as $horario) 
        <tr>
           
            <td>{{$horario->fecha}}</td>
            <td>{{$horario->hora_llegada}}</td>
            <td>{{$horario->hora_salida}}</td>
            @if (auth()->id()==1)
            <td>
                <form action="{{url('/empleado.horario'.$horario->id)}}" method="post">
                @csrf 
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('quieres borrar') " value="Borrar">
                </form>
            
             </td>
             @endif
             

          
            
     
            
            
        </tr>
        
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<div class="d-flex justify-content-center">  
<a class="btn btn-dark  " href="{{url('home')}}">Volver</a>
</div>
</div>
@endsection