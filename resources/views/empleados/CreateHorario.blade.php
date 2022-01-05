@extends('layouts.app')
@section('content')
<a href="{{url('empleado.horario'.$id)}}">Volver</a>
<form action="{{url('empleado.CreateHorario'.$id)}}" method="post">

@csrf

     <label for="fecha">fecha</label>
     <input type="text" name="fecha" id="Fecha">
     @error('fecha')
     <small>*{{$message}}</small>
     @enderror
     <br>
     <label for="Hora_llegada">Hora Llegada</label>
     <input type="text" name="hora_llegada" id="Fecha">
     @error('hora_llegada')
     <small>*{{$message}}</small>
     @enderror
     <br>
  
     <label for="Hora_salida">Hora Salida</label>
     <input type="text" name="hora_salida" id="Fecha">
     @error('hora_salida')
     <small>*{{$message}}</small>
     @enderror
     <br>
   
    <button type="submit" class="btn btn-primary">Submit</button>

     
    
   

</form>
@endsection