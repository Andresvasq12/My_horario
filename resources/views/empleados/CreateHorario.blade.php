@extends('layouts.app')
@section('content')
<a class="btn btn-primary ms-3" href="{{url('home')}}">Volver</a>
<form action="{{url('empleado.CreateHorario'.$id)}}" method="post">

@csrf

<div  class="card-body ">    
        <div class="row ">
            <div class="col-md-6">         

                <label for="Hora_llegada" class="fw-bold">Hora Llegada</label>
                <br>
                <input type="text" name="hora_llegada" id="Fecha">
                @error('hora_llegada')
                <small>*{{$message}}</small>
                @enderror
                <br>
            </div>
        </div>   
        <div class="row ">
            <div class="col-md-6"> 

                <label for="Hora_salida" class="fw-bold">Hora Salida</label>
                <br>
                <input type="text" name="hora_salida" id="Fecha">
                @error('hora_salida')
                <small>*{{$message}}</small>
                @enderror
                <br>
        </div>
           </div>         
     
     <div class="row ">
            <div class="col-md-6"> 
                 <label for="fecha" class="fw-bold">Fecha</label>
                 <br>
                 <input type="text" name="fecha" id="Fecha">
                 @error('fecha')
                 <small>*{{$message}}</small>
                 @enderror
            </div>
     </div>        
    <button type="submit" class="btn btn-dark mt-3 ">Submit</button>

     
    

</div>
</form>
@endsection