<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => [
                'required',
                'string',
                'max:255',
                // On ignore le tag en cours de modification
                Rule::unique('tags', 'slug')->ignore($this->route('tag')),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'slug.unique' => 'Ce slug est déjà utilisé par un autre tag.',
        ];
    }
}