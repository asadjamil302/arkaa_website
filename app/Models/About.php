<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
 
    ];
    
    public function setKeyAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
        $this->attributes['key'] = $value;
    }
}
