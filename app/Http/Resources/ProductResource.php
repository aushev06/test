<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'image_path' => str_contains($this->image_path, 'https') ? $this->image_path : "/storage/$this->image_path",
            'description' => $this->description,
            'price' => $this->price,
            'fermer' => $this->fermer,
            'category_id' => $this->category_id

        ];
    }
}
