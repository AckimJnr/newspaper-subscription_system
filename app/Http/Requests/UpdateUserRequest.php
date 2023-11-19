<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'first_name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
            'username' => 'sometimes|required|string|max:255|unique:users',
            'email' => 'sometimes|required|email|max:255|unique:users',
            'company_name' => 'sometimes|nullable|string|max:255',
            'sex' => ['sometimes','required', 'string', Rule::in(['male', 'female'])],
            'password' => 'sometimes|required|string|min:6',
            'district_code' => 'sometimes|required|string|max:255', 
            'physical_address' => 'sometimes|required|string|max:255',
            'country' => 'sometimes|required|string|max:255',
            'phone_number' => 'sometimes|required|string|max:20',
        ];
    }
}
