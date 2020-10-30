<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){

        if(session('statuslogin')){
            return redirect('/view');
        }else{
            return view('login');
        }

    }

    public function login(Request $request){

        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',            
        ]);
    
        $username = $request->username;
        $password = $request->password;

        $datauser = User::where('username', $username)->first();

        if($datauser){
            if(Hash::check($password, $datauser->password)){
                session(["statuslogin" => 1]);  // $request->session()->put('statuslogin',1)
                session(["username" => $datauser->username]);  // $request->session()->put('statuslogin',1)
                session(["nama" => $datauser->name]);  // $request->session()->put('statuslogin',1)
                return redirect('/view');
            }
        }
        return redirect('/')->with('message', 'Autentikasi gagal');
        
    }

    public function logout(Request $request){

        $request->session()->flush();
        return redirect('/');

        
    }



}
