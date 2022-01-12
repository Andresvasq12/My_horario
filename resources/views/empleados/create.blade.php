@extends('layouts.app')
@section('content')

<a class="btn btn-primary ms-3" href="{{url('home')}}">Volver</a>

<div class="card-body">
    <form action="{{url('empleado.create')}}" method="post" >
    @csrf
    <div class="row ">
         <div class="col-md-6"> 
            <label for="Identificacion" class="fw-bold" >Identificacion</label>
            <br>
            <input type="number" name="identificacion" id="Identificacion">
            @error('identificacion')
            <small>*{{$message}}</small>
            @enderror
        </div>
        
    </div>   
    <div class="row mb-3">
         <div class="col-md-6">     
            <br>
            <label for="Nombre" class="fw-bold">Nombre</label>
            <br>
            <input type="text" name="nombre" id="Nombre" >
            @error('nombre')
            <small>*{{$message}}</small>
            @enderror
        </div>
    </div> 
    <div class="row mb-3">
         <div class="col-md-6">  
            
            <label for="Apellido" class="fw-bold">Apellido</label>
            <br>
            <input type="text" name="apellido" id="Apellido">
            @error('apellido')
            <small>*{{$message}}</small>
            @enderror
        </div>
    </div> 
    <div class="row mb-3">
         <div class="col-md-6">             
             <label for="Email" class="fw-bold">Email</label>
             <br>
             <input type="email" name="email" id="Email"> 
             @error('email')
             <small>*{{$message}}</small>
             @enderror
          </div>
     </div> 
            
    
    <div class="row ">
        <div class="col-md-6" class="fw-bold">  
         
            <label for="password" class="fw-bold">Contraseña</label>
            <br>
            <input type="password" name="password" id="password"> 
            @error('password')
            <small>*{{$message}}</small>
            @enderror
            
        </div>
    </div>    
</div>     
        
   
        
           
        <button type="submit" class="btn btn-dark ms-3" >Submit</button>
        


</form>
            

@endsection
     
    




