<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    
    public function sub_project()
    {
        return $this->hasMany(SubProject::class);
    }
    public function getImageAttribute()
    {
        return asset('images/project/'.$this->attributes['image']);

    }
    

}
