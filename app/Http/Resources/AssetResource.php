<?php

namespace App\Http\Resources;

use App\Models\Content;
use Illuminate\Http\Resources\Json\JsonResource;

class AssetResource extends JsonResource
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
        $content = Content::where('asset_id',$this->id)->first();
        return [
            'id' => $this->id,
            'name' => $this->name,
            'title'  => $this->title,
            'content_fulltext' => $content['fulltext'],
            'publish_up'=> $content['publish_up'],
        ];
    }
}
