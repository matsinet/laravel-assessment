<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class BaseTodoRequest extends FormRequest
{
    public function mappedAttributes()
    {
        $attributeMap = [
            'data.attributes.description' => 'description',
            'data.attributes.priority' => 'priority',
            'data.attributes.dueDate' => 'due_date',
            'data.attributes.completedAt' => 'created_at',
            'data.attributes.userId' => 'user_id',
        ];

        $attributesToUpdate = [];
        foreach ($attributeMap as $key => $attribute) {
            if ($this->has($key)) {
                $attributesToUpdate[$attribute] = $this->input($key);
            }
        }

        return $attributesToUpdate;
    }

    public function messages(): array
    {
        return [
            'data.attributes.priority' => 'The data.attributes.priority must be one of "low", "medium", "high", "highest"',
        ];
    }
}
