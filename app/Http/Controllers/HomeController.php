<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\UserController;

use App\Models\User;

use App\Models\Horario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->user()->role==1){
            $datos['empleados']=User::where('role',2)->get();
    
    
    
            return view('empleados.index',$datos);}
    
        $id['id']=$request->user()->id;

        $empleado['empleados']=User::find($id['id']);

        $horarios['horarios']=Horario::where('user_id',$id['id'])->get();
                
        return view('empleados.IndexHorario',$horarios,$empleado);
    }
}
