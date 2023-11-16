<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'email' => $this->email,
            'company_name' => $this->company_name,
            'sex' => $this->sex,
            'account_id' => $this->account_id,
            'user_details' => $this->user_details,
            'user_details' => $this->user_details->map(function ($userDetail) {
                return [
                    'district_name' => $userDetail->district->district_name ?? null,
                    'district_code' => $userDetail->district->district_code ?? null,
                    'physical_address' => $userDetail->physical_address ?? null,
                    'country' => $userDetail->country ?? null,
                    'phone_number' => $userDetail->phone_number ?? null,
                ];
            }),
        ];
    }
}
