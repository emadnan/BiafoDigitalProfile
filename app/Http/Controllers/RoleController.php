<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\PermissionRole;

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
    public function permission_role($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        $permission_roles = PermissionRole::where('role_id', $id)->get();
        $data = compact('role', 'permissions', 'permission_roles');
        return view('permission_role')->with($data);
    }
    public function add_permission_role(Request $request)
    {
        $permission_roles=PermissionRole::where('role_id',$request->role)->get();
        if($permission_roles->count()>0){
            foreach($permission_roles as $permission_role){
                $permission_role->delete();
            }
        }
        $permissions=$request->permissions;
        if($permissions==null){
            return redirect()->route('roles')->with('success', 'Permission added successfully');
        }
        foreach($permissions as $permission){
            $permission_role = new PermissionRole();
            $permission_role->permission_id = $permission;
            $permission_role->role_id = $request->role;
            $permission_role->save();
        }
        return redirect()->route('roles')->with('success', 'Permission added successfully');
    }
    public function testenv()
    {
        print_r(env('STRIPE_KEY'));
    }
}
