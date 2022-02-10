<?php

namespace App\Http\Resources;

use App\Models\Content;
use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

            $detail = Content::where('asset_id',$this->id)->first();
            return [
                'id' => $this->id,
                'name' => $this->name,
                'title'  => $this->title,
                'fulltext' => $this->fulltext !== null ? $this->fulltext : 'ว่าง',
                'publish_up'=> $this->publish_up,
                'level' => $this->level,
            ];


    }
}
