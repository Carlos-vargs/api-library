<?php

namespace App\Http\Resources;

use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'title' => $this->title,
            'group' => $this->group,
            'year' => $this->year,
            'language' => $this->language,
            'category' => $this->category,
            'description' => $this->description,
            'authors' => AuthorResource::make(Author::findOrFail($this->author_id)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

}
