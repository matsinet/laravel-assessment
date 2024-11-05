<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($request);

        return [
            'uuid' => $this->uuid,
            'meta' => [
                'createdAt' => $this->created_at,
                'updatedAt' => $this->update_at
            ],
            'type' => 'users',
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
            ],
            // 'links' => [
            //     'self' => route('users.show', ['user' => $this->uuid])
            // ]
        ];
    }
}
