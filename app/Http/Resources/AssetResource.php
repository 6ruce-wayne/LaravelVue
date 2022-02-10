<?php

namespace App\Http\Resources;

use App\Models\Categorie;
use App\Models\Content;
use Exception;
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
        try{
            $detail = Content::where('asset_id',$this->id)->first();
            return [
                'id' => $this->id,
                'name' => $this->name,
                'title'  => $this->title,
                'content_fulltext' => $detail['fulltext'] !== null ? $detail['fulltext'] : 'ว่าง',
                'publish_up'=> $detail['publish_up'],
                'level' => $this->level,
            ];
        }catch(Exception $e){
            $detail = Categorie::where('asset_id',$this->id)->first();
            return [
                'id' => $this->id,
                'parent_id' => $detail['parent_id'],
                'name' => $this->name,
                'title'  => $this->title,
                'level' => $this->level,
            ];
        }

    }
}
