<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Http\Resources\Role;
use App\Models\Roles;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Roles::all();
        return $roles;
    }

    public function store(RoleRequest $request)
    {
        $role = Roles::create(array_merge([
            'role_uid' => Str::uuid(),
        ], $request->validated()));

        if ($request->has('permissions')) {
            $permissions = $request->input('permissions');
            $role->permissions()->attach($permissions);
        }

        return response()->json([
            'data' => new Role($role),
            'message' => 'Role added successfully',
        ], 201);
    }
}
