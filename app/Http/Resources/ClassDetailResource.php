<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClassDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'class_thumbnail' => $this->class_thumbnail,
            'class_name' => $this->class_name,
            'class_desc' => $this->class_desc,
            'category' => $this->whenLoaded('category'),
            'user_class' => $this->whenLoaded('user_class'),
            'class_fasil' => $this->whenLoaded('class_fasil'),
            'class_activity' => $this->whenLoaded('class_activity'),
        ];
    }
}
