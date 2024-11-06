<?php

namespace App\Http\Requests\Api\V1;

class StoreTodoRequest extends BaseTodoRequest
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
        $rules = [
            'data.attributes.description' => 'required|string',
            'data.attributes.priority' => 'required|string|in:low,medium,high,highest',
            'data.attributes.dueDate' => 'string',
            'data.attributes.completedAt' => 'string',
        ];

        if ($this->routeIs('todos.store')) {
            $rules['data.attributes.userId'] = 'required|string';
        }

        return $rules;
    }
}
