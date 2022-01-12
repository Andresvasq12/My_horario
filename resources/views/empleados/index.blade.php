@extends('layouts.app')
@section('content')

 
     <a class="btn btn-dark btn-lg" href="{{url('empleado.create')}}" role="button">Crear Empleado</a>
          
      <div class=row></div>     
        <div class="table-responsive " >
            <table class="table">
                <thead class="thead-light ">
                    <tr>
                    
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
                      
                        <td>{{$empleado->identificacion}}</td>
                        <td>{{$empleado->nombre}}</td>
                        <td>{{$empleado->apellido}}</td>
                        <td>{{$empleado->email}}</td>
                    
                           
                        <td>

                            <form action="{{url('empleado.CreateHorario'.$empleado->id)}}" method="get">
                            @csrf
                                <input class="btn btn-dark" type="submit"   value="Crear Horario">
                            </form>
                            
                        </td>
                    

                        <td>
                            @csrf
                            <form action="{{route('empleado.horario',[$empleado->id])}}" ,method="GET">
                                <input class="btn btn-dark" type="submit"   value="Horario">
                            </form>
                            
                            
                        </td>
                        <td>
                            <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres Borrar al Empelado ') " value="Borrar">
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
        </div>    
        </div>  
                                    
              





@endsection