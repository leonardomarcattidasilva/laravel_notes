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
            'text_title' => 'required|min:10',
            'text_note' =>  'required|min:40'
        ];
    }

    public function messages() : array
    {
        return [
            'text_title.required' => 'O campo é obrigatório',
            'text_note.required' => 'O campo é obrigatório',
            'text_title.min' => 'O campo deve ter pelo menos :min caracteres',
            'text_note.min' => 'O campo deve ter no mámixo :min caracteres',
        ];
    }
}
