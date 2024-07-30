<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class superAdminController extends Controller
{
    //
    public function index(Request $request){
        $title = "Super Admin";
        $admin = User::paginate(10);
        return view('superadmin.index',compact('title','admin'));
    }

}
