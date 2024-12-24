<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Termwind\terminal;

class LoginRequest extends FormRequest
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
            'text_username' => 'required|email',
            'text_password' => 'required|min:6|max:16'
        ];
    }

    public function messages() : array
    {
        return [
            'text_username.required' => 'O campo é obrigatório',
            'text_username.email' => 'O campo deve ser um email válido',
            'text_password.min' => 'O campo deve ter pelo menos :min caracteres',
            'text_password.max' => 'O campo deve ter no mámixo :max caracteres',
            'text_password.required' => 'O campo é obrigatório',
        ];
    }
}
