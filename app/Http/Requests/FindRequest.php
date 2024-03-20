<?php

namespace App\Http\Requests;

use Closure;
use Illuminate\Foundation\Http\FormRequest;

class FindRequest extends FormRequest
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
            'data' => [
                'bail', 'required', 'array',
                function (string $attribute, mixed $value, Closure $fail) {
                    if (!isAssociative($value)) {
                        return $fail("The {$attribute} must by 'key->value'");
                    }

                    if (collect($value)->first(fn ($it) => !is_string($it))) {
                        $fail("The value of {$attribute} must be a string");
                    }
                }
            ]
        ];
    }
}
