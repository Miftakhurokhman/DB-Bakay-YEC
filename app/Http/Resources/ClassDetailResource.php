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
            'class_fasil' => $this->whenLoaded('class_fasil', function() {
                return collect($this->class_fasil)->each(function($fasil) {
                    $fasil->fasil;
                    return $fasil;
                });
            }),
            'class_activity' => $this->whenLoaded('class_activity', function() {
                return collect($this->class_activity)->each(function($sub_activity) {
                    $sub_activity->sub_activity;
                    return $sub_activity;
                });
            })
        ];
    }
}
