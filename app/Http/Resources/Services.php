<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Services extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'day'       => $this->day,
            'date'       => $this->date,
            'start'       => $this->start,
            'end'       => $this->end,
            'availability' => $this->availability
        ];
    }
}
