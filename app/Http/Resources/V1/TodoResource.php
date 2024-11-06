<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->uuid,
            'meta' => [
                'createdAt' => $this->created_at,
                'updatedAt' => $this->update_at
            ],
            'type' => 'todos',
            'attributes' => [
                'description' => $this->description,
                'priority' => $this->priority,
                'dueDate' => $this->due_date,
                'completedAt' => $this->completed_at,
            ],
            'relationships' => [
                'user' => [
                    'attributes' => [
                        'id' => $this->user_id,
                    ]
                ]
            ],
            'links' => [
                'self' => route('users.show', ['user' => $this->user_id])
            ]
        ];
    }
}
