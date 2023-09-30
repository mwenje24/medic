<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'patient_id' => [
                'required',
                Rule::exists('patients', 'patient_uid'),
            ],
            'staff_id' => [
                'required',
                Rule::exists('staffs', 'staff_uid'),
            ],
            'appointment_date' => [
                'required',
            ],
            'appointment_status' => [
                'required',
            ],
        ];
    }
}
