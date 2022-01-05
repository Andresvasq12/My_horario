<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index( $id)
    {   
        $datos['horarios']=Horario::with("empleados")->
                             where('user_id',$id)
                             ->get();
        $empleado['empleados']=User::find($id);
                            
        return view('empleados.IndexHorario',$empleado,$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)

    {    $id_['id']=$id;
         return view('empleados\CreateHorario',$id_);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {    
        $this->validate($request,[
            'fecha'=>'required',
            'hora_llegada'=>'required',
            'hora_salida'=>'required',
           
            ]) ;

         $request['user_id']=$id;      
         
         $datosHorario=$request->except('_token');
             
         Horario::insert($datosHorario);
        
         return "Horario Creado" ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Horario::destroy($id);
         return back()->withInput();}
}
