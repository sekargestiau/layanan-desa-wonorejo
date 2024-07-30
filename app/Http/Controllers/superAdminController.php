<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class superAdminController extends Controller
{
    //
    public function index(Request $request){
        $title = "Super Admin";
        $admin = User::where('role', '!=', 'superadmin')->paginate(10);
        return view('superadmin.index', compact('title', 'admin'));
    }


    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();
        return redirect(route('superadmin'))->with('success', 'Status user updated successfully');
    }

}
