<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProject extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function getImageAttribute()
    {
        return asset('images/subproject/'.$this->attributes['image']);

    }
    public function faq()
    {
        return $this->hasMany(faq::class);
    }
    public function getPayment_planAttribute()
    {
        return asset('images/subproject/payment_plan/'.$this->attributes['payment_plan']);

    }
    public function getMaster_planAttribute()
    {
        return asset('images/subproject/master_plan/'.$this->attributes['master_plan']);

    }
    public function getFloor_planAttribute()
    {
        return asset('images/subproject/floor_plan/'.$this->attributes['floor_plan']);

    }

}
