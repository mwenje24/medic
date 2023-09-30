<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrescriptionRequest;
use App\Http\Resources\Prescription;
use App\Models\Prescriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PrescriptionsController extends Controller
{
    public function index()
    {
        $prescriptions = Prescriptions::all();
        return $prescriptions;
    }

    public function store(PrescriptionRequest $request)
    {
        $prescription = Prescriptions::create(array_merge([
            'prescription_uid' => Str::uuid(),
        ], $request->validated()));

        return response()->json([
            'data' => new Prescription($prescription),
            'message' => 'Prescription created successfully',
        ], 201);
    }
}
