<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'nigln_categories';
    protected $primaryKey ='id';

    protected $filteable = [
        'parent_id',
        'title',
        'path',
        'alias',
        'published',
        'language'
    ];

    public function content(){
       return $this->belongsTo(Content::class, 'id','catid');
    }
    public function assets(){
        return $this->belongsTo(Assets::class,'asset_id','id');
    }
}
