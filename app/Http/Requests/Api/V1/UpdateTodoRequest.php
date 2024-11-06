<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTodoRequest extends BaseTodoRequest
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
            'data.attributes.description' => 'sometimes|string',
            'data.attributes.priority' => 'sometimes|in:low,medium,high,highest',
            'data.attributes.dueDate' => 'sometimes|string',
            'data.attributes.completedAt' => 'sometimes|string',
        ];

        if ($this->routeIs('todos.update')) {
            $rules['data.attributes.userId'] = 'sometimes|string';
        }

        return $rules;
    }
}
