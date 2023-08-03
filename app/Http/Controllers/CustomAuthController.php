<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CustomAuthController extends Controller 
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }
    public function choix(){
        return view("choix.auth");
    }

    public function registerUser(Request $request){
       $request->validate([
        'name'=> 'required',
        'email'=> 'required|email|unique:users',
        'password'=> 'required|min:5|max:12'
       ]);
       $users = new User();
       $users->name = $request->name;
       $users->email = $request->email;
       $users->password = Hash::make($request->password);
       $res = $users->save(); 
       if ($res) {
            return back()-> with('success','You have registered successfuly');
       }else {
        return back()-> with('fail','Something wrong');
       }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:5|max:12'
           ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user) {
            if (Hash::check($request->password,$user->password)) {
             $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else {
                return back()->with('fail','Password not matches.');
            }
        }else {
            return back()->with('fail','This email is not registered.');
        }
    }

    public function dashboard(){
        return view('dashboard');
    }
}
