<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeImage extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
 
    ];
    public function setKeyAttribute($image)
    {
        $this->attributes['slug'] = Str::slug($image);
        $this->attributes['name'] = $image;
    }
    public function getImageAttribute()
    {
        return asset('images/home_images/'.$this->attributes['image']);
    }
}
