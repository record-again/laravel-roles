<?php

namespace App\Http\Controllers\Permissions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        return view('permissions.permis.index', compact('permissions'));
    }

    public function store()
    {
        Permission::create([
            'name' => request('name'),
            'guard_name' => request('guard_name') ?? 'web'
        ]);

        return back();
    }
}
