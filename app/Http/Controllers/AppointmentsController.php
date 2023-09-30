<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Http\Resources\Appointment;
use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppointmentsController extends Controller
{
    public function index()
    {
        $appointment = Appointments::all();
        return $appointment;
    }

    public function store(AppointmentRequest $request)
    {
        $appointment = Appointments::create(array_merge([
            'appointment_uid' => Str::uuid(),
        ], $request->validated()));

        return response()->json([
            'data' => new Appointment($appointment),
            'message' => 'Appointment created successfully',
        ], 201);
    }
}
