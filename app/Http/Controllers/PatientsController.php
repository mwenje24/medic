<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Http\Resources\Patient;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patients::all();
        return $patients;
    }

    public function store(PatientRequest $request)
    {
        $patient = Patients::create(array_merge([
            'patient_uid' => Str::uuid(),
        ], $request->validated()));

        return response()->json([
            'data' => new Patient($patient),
            'message' => 'Patient added successfully',
        ], 201);
    }
}
