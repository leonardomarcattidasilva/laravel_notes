<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewNoteRequest extends FormRequest
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
            'title' => 'required|min:10',
            'text' =>  'required|min:40'
        ];
    }

    public function messages() : array
    {
        return [
            'title.required' => 'O campo é obrigatório',
            'text.required' => 'O campo é obrigatório',
            'title.min' => 'O campo deve ter pelo menos :min caracteres',
            'text.min' => 'O campo deve ter no mínimo :min caracteres',
        ];
    }
}
