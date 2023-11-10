<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuebleRequest extends FormRequest
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
            'nombre' => 'required|max:100',
            'descripcion' => 'required|max:255',
            'tipo' => 'required|max:100',
            'cantidad' => 'required|numeric|min:0|max:2147483646',
            'precio' => 'required|numeric|min:0|max:999999',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}