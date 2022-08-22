<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whychooseus extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'icon', 
        'description',
        'meta_tag',
        'meta_title',
        'meta_description',

    ];  
}
