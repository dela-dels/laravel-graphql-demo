<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'content' => $this->resource->content,
            'createdAt' => $this->resource->created_at->format('Y-m-d'),
            'updatedAt' => $this->resource->updated_at->format('Y-m-d')
        ];
    }
}
