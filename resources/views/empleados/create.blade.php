@extends('layouts.app')
@section('content')
<a href="{{url('home')}}">Volver</a>
<form action="{{url('empleado.create')}}" method="post">
@csrf
     <label for="Identificacion">Identificacion</label>
     <input type="number" name="identificacion" id="Identificacion">
     @error('identificacion')
     <small>*{{$message}}</small>
     @enderror
     <br>
     <label for="Nombre">Nombre</label>
     <input type="text" name="nombre" id="Nombre" >
     @error('nombre')
     <small>*{{$message}}</small>
     @enderror
     <br>
     <label for="Apellido">Apellido</label>
     <input type="text" name="apellido" id="Apellido">
     @error('apellido')
     <small>*{{$message}}</small>
     @enderror
     <br>
     @error('email')
     <small>*{{$message}}</small>
     @enderror
    <label for="Email">Email</label>
    <input type="email" name="email" id="Email"> 
    
    <br>
    @error('password')
     <small>*{{$message}}</small>
     @enderror
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password"> 
    <button type="submit" class="btn btn-primary">Submit</button>





</form>
@endsection