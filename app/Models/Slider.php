<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getImageAttribute()
    {
        return asset('images/slider/'.$this->attributes['image']);

    }
}
