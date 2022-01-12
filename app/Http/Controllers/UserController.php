<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $datos['empleados']=User::where('role',2)->get();
        return view('empleados.index',$datos);
    }
   
    public function create()
    {
        //
        return view('empleados.create');
    }

    public function store(Request $request)

    {   $this->validate($request,[
        'nombre'=>'required',
        'identificacion'=>'required',
        'apellido'=>'required',
        'password'=>'required|min:4',
        'email'=>'required|email|unique:users'
        ]) ;

        $datosEmpleado=$request->except('_token');
        
        $password=Hash::make($request->password);
        
        $datosEmpleado['password']=$password;
       
        User::insert($datosEmpleado);
        
        return redirect('empleado')->with('mensaje','Empleado creado');
    }
        
    public function destroy( $id)
    {
        User::destroy($id);
        
        return back()->withInput();
    }
        

}
