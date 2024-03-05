<?php

namespace App\Http\Controllers\Permissions;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class AssignController extends Controller
{
    public function index()
    {
        $roles = Role::get()->map(function($role) {
            return [
                'name' => $role->name,
                'value' => $role->id
            ];
        });

        $permissions = Permission::get()->map(function($permission) {
            return [
                'name' => $permission->name,
                'value' => $permission->name
            ];
        });

        return view('permissions.assign.index', compact('roles' ,'permissions'));
    }

    public function store()
    {
        $role = Role::find(request('role'));
        $permissions = request('permissions');
        $role->syncPermissions($permissions);
        
        return back();
    }
}
