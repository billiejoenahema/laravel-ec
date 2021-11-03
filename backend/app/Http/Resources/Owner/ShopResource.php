<?php

namespace App\Http\Resources\Owner;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'owner_id' => $this->owner_id,
            'name' => $this->name,
            'information' => $this->information,
            'filename' => $this->filename,
            'is_selling' => $this->is_selling,
            'created_at' => $this->created_at,
            'owner' => new OwnerResource($this->owner),
            'product' => new ProductResource($this->product),
        ];
    }
}
