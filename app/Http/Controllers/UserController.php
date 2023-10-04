<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class UserController extends Controller
{
    public function index(){
        
        $user =  User::orderBy('id', 'desc')->paginate();

        return view('users.index');       

}
    public function create(){
        $roles = Role::all();
        return view('users.create', ['role'=>$roles]);

    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->telefono = $request->telefono;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id=$request->role_id;
        $user->save();
    }
}
