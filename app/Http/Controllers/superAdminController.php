<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class superAdminController extends Controller
{
    //
    public function index(Request $request)
    {
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

    public function create()
    {
        $title = "Create Super Admin";
        return view('superadmin.create', compact('title'));
    }

   
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'username' => 'required',
        'email' => 'required|email|unique:users,email',
        'role' => 'required',
        'password' => 'required|min:6',
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->username = $request->username;
    $user->password = bcrypt($request->password);
    $user->role = $request->role;
    $user->save();

    return redirect(route('superadmin'))->with('success', 'User created successfully');
}

    public function view($id)
    {
        $admin = User::findOrFail($id);
        $title = "Super Admin " . $admin->name;
        return view('superadmin.view', compact('title', 'admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();

        return redirect(route('superadmin'))->with('success', 'User updated successfully');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('superadmin'))->with('success', 'User deleted successfully');
    }
}
