@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_horario</title>

</head>
<body id='welcome'>
<div>  
    

  <!-- <img src='imagen1.jpg'  class="img-fluid" > -->
 @auth
  @if (auth()->id()==1)
  
  <a class="btn btn-dark ms-3" href="{{url('home')}}">Empleados</a>

  @else
  
  <a class="btn btn-dark ms-3" href="{{url('home')}}">Horario</a>
 
 @endif
  @endauth
</div>

</body>
</html>
@endsection