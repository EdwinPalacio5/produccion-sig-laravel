<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

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
}