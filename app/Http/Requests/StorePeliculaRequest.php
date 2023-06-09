<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeliculaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'max:100'],
            'fecha_publicacion' => ['nullable', 'max:50', 'date'],
            'imagen' => ['nullable', 'mimes:png,jpg,jpeg|max:2048'],
            'estado' => ['nullable', 'max:1'],
        ];
    }
}
