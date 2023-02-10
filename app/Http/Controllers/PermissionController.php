<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permission = Permission::all();
        $data = compact('permission');
        return view('permissions')->with($data);
    }

    public function add_Permission(Request $request)
    {
        $permission = new Permission();
        $permission->permission = $request->permission;
        $permission->save();
        return redirect()->route('permissions')->with('success', 'Permission added successfully');
    }

    public function delete_Permission($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->route('permissions')->with('success', 'Permission deleted successfully');
    }

    public function update_Permission(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->permissions = $request->permissions;
        $permission->save();
        return redirect()->route('permission')->with('success', 'Permission updated successfully');
    }
}
