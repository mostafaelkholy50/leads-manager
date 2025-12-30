<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|ascii|unique:leads,email|max:255',
            'phone' => 'nullable|digits:11|regex:/^[0-9]+$/',
            'status' => 'required|in:new,contacted,closed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name may only contain English letters and spaces (no numbers or symbols).',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.ascii' => 'The email must contain English characters only.',
            'email.unique' => 'This email is already taken.',
            'phone.digits' => 'The phone number must be exactly 11 digits.',
            'phone.regex' => 'The phone number may only contain digits.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The selected status is invalid.',
        ];
    }
}
