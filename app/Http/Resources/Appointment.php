<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Appointment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'patients_id' => $this->patients_id,
            'staffs_id' => $this->staffs_is,
            'appointment_date' => $this->appointment_date,
            'appointment_status' => $this->appointment_status
        ];
    }
}
