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
   public function toArray($request){
    return [
        'id'=>$this->id,
        'name'=>$this->name,
        'description'=>$this->description,
        'price'=> (float) $this->price,
        'on_sale'=> (bool) $this->on_sale,
        'image'=> $this->image ? asset('storage/'.$this->image) : null,
        'category'=> $this->whenLoaded('category', fn()=>['id'=>$this->category->id,'name'=>$this->category->name]),
        'created_at'=>$this->created_at->toDateTimeString(),
    ];
}

}
