<?php

namespace App\Http\Resources\Owner;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'information' => $this->information,
            'price' => $this->price,
            'is_selling' => $this->is_selling,
            'sort_order' => $this->sort_order,
            'shop_id' => $this->shop_id,
            'secondary_category_id' => $this->secondary_category_id,
            'created_at' => $this->created_at,
            'shop' => new ShopResource($this->shop),
            'category' => new SecondaryCategoryResource($this->category),
            'image1' => new ImageResource($this->imageFirst),
            'image2' => new ImageResource($this->imageSecond),
            'image3' => new ImageResource($this->imageThird),
            'image4' => new ImageResource($this->imageFourth),
            'stock' => StockResource::collection($this->stock),
            'users' => UserResource::collection($this->users),
        ];
    }
}
