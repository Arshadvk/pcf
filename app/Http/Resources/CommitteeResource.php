<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommitteeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'emirates' => $this->emirates,
            'position' => $this->position ? $this->position->name : null,
            'emirate'  => $this->emirate ? $this->emirate->name : null,
            'image'    => $this->image,
        ];
    }
}
