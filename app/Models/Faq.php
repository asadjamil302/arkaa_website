<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function sub()
    {
        return $this->belongsTo(SubProject::class, 'sub_project_id');
    }
    
}
