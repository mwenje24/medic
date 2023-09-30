<?php

namespace App\Http\Controllers;

use App\Http\Requests\Permision as RequestsPermision;
use App\Http\Requests\PermisionRequest;
use App\Http\Resources\Permision;
use App\Models\Permisions;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class PermisionsController extends Controller
{
    public function index()
    {
        $permissions = Permisions::all();
        return $permissions;
    }

    public function store(PermisionRequest $request)
    {
        $permision = Permisions::create(array_merge([
            'permision_uid' => Str::uuid(),
        ], $request->validated()));

        return response()->json([
            'data' => new Permision($permision),
            'message' => 'Permision added successfully',
        ], 201);
    }
}