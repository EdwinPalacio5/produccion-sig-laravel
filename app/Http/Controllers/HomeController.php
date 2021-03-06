<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Rol;

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
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('index');
    }

    public function listUsers(){
        $users = User::all();
        return view('user.index',compact('users'));
    }

    public function blockUser(Request $request){
        $user = User::where('id',$request->id)->first();
        if($user->is_user_block){
            $user->is_user_block = false;
        }else{
            $user->is_user_block = true;
        }
        $user->save();
        return redirect()->route('usuarios')->with('mensaje','Cambio efectuado sobre usuario');
    }

    public function createUser(){
        $rols = Rol::all();

        return view('user.create')->with(compact('rols'));
    }

    /**
     * @author Enrique Menjívar
     * @param  $request: contiene todos los datos ingresados en el formulario
     * @return Redirecciona al listado de usuarios
     */
    public function storeUser(Request $request){

        //Validaciones para el usuario
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'rol' => 'required|exists:rols,rol_id'
        ];

        $messages = [
            'name.required' => 'Debe ingresar el nombre del usuario',
            'email.required' => 'Debe ingresar el email del usuario',
            'email.unique' => 'El email ingresado ya se encuentra registrado',
            'email.email' => 'El correo ingresado no cumple con el formato de un email',
            'password.required' => 'Debe ingresar la contraseña del usuario',
            'password.min' => 'La contraseña del usuario debe poseer al menos 8 caracteres',
            'rol.required' => 'Es necesario asignarle un rol al usuario',
            'rol.exists' => 'El rol seleccionado no existe'
        ];
        $this->validate($request, $rules, $messages);

        //Crear un nuevo usuario
        $user = new User();

        //Agregarle los ingresados al usuario creado
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->rol_id = $request->input('rol');

        //Guardar el usuario
        $user->save();

        //Redirecciona al listado de empelados
        return redirect('usuarios')->with('notification', 'El usuario fue registrado con éxito');
    }

    public function editUser($user_id){
        $user = User::findOrFail($user_id);
        $rols = Rol::all();

        return view('user.edit')->with(compact('user', 'rols'));
    }

    /**
     * Esta función sirve para modificar la información de un usuarior del SIG.
     * @author Enrique Menjívar
     * @param  $request: contiene los datos ingresados por el usuario en el fomrulario
     * @return Redirecciona al listado de usuarios.
     */
    public function updateUser(Request $request){

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'sometimes|nullable|min:8',
            'rol' => 'required|exists:rols,rol_id'
        ];

        $messages = [
            'name.required' => 'Debe ingresar el nombre del usuario',
            'password.required' => 'Debe ingresar la contraseña del usuario',
            'password.min' => 'La contraseña del usuario debe poseer al menos 8 caracteres',
            'email.required' => 'Debe ingresar el email del usuario',
            'email.email' => 'El correo ingresado no cumple con el formato de un email',
            'rol.required' => 'Es necesario asignarle un rol al usuario',
            'rol.exists' => 'El rol seleccionado no existe'
        ];

        //Validaciones
        $this->validate($request, $rules, $messages);

        //Se recupera la información original del usuario que está siendo modificado
        $user = User::findOrFail($request->input('id'));
        
        //Si se ingresó contraseña será cambiada
        if($request->input('password')){
            $user->password = bcrypt($request->input('password'));            
        }

        //Se actualizan los datos del usuario
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->rol_id = $request->input('rol');

        //Se guardan los datos del usuario
        $user->save();


        return redirect('usuarios')->with('notification', 'Los datos del usuario fueron actualizados con éxito');
    }

    
    public function etl(){
        return view('etl');
    }
}