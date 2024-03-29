<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'gallery_category_id');
    }


}
