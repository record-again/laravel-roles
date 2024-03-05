<?php

namespace App\Http\Controllers\Permissions;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get();
        return view('permissions.roles.index', compact('roles'));
    }

    public function store()
    {
        Role::create([
            'name' => request('name'),
            'guard_name' => request('guard_name') ?? 'web'
        ]);

        return back();
    }
}
