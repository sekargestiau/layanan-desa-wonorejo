<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sessionController extends Controller
{
    //

    public function index(){
        $title = "Login";
        return view('session.login', compact('title'));
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required|string', 
            'password' => 'required'
        ]);
    
        if(auth()->attempt($request->only('username', 'password'))){ // if the user is authenticated
            //Check Role
            switch (Auth::user()->role){
                case 'admin_peta':
                    return redirect()->route('peta.admin');
                    // break; 
                case 'admin_posyandu':
                    return redirect()->route('posyandu.admin');
                    // break; 
                case 'admin_pengaduan':
                    return redirect()->route('pengaduan.admin');
                        // break; 
                case 'admin_agenda':
                    return redirect()->route('agenda.index');
                        // break; 
                 case 'superadmin':
                    return redirect()->route('superadmin');
                    // break;
                default: // added default case
                    return back()->withErrors('Role not recognized');
            }
        }
    
        return back()->withErrors('Invalid credentials'); // corrected indentation
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginPage');
    }
}
