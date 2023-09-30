<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Http\Resources\Staff;
use App\Models\Staffs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StaffsController extends Controller
{
    public function index()
    {
        $staff = Staffs::all();
        return $staff;
    }

    public function store(StaffRequest $request)
    {
        $staff = Staffs::create(array_merge([
            'staff_uid' => Str::uuid(),
        ], $request->validated()));

        return response()->json([
            'data' => new Staff($staff),
            'message' => 'Staff added successfully',
        ], 201);
    }
}
