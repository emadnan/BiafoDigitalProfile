<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $data = compact('roles');
        return view('roles')->with($data);
    }
    public function add_role(Request $request)
    {
        $role = new Role();
        $role->role = $request->role;
        $role->save();
        return redirect()->route('roles')->with('success', 'Role added successfully');
    }
    public function delete_role($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles')->with('success', 'Role deleted successfully');
    }
    public function update_role(Request $request,$id)
    {
        $role = Role::find($id);
        $role->role = $request->role;
        $role->save();
        return redirect()->route('roles')->with('success', 'Role updated successfully');
    }
}
