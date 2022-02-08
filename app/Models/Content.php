<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table ='nigln_content';
    protected $primaryKey = 'id';

    protected $fillteable = [
        'asset_id',
        'catid',
        'state',
        'ordering',
        'language',
        'publish_up',
        'publish_down'
    ];

     public function category(){
         return $this->belongsTo(Categorie::class,'catid','id');
     }

     public function assets(){
        return $this->belongsTo(Assets::class,'asset_id','id');
    }
}
