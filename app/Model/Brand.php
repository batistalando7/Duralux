<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    //
    protected $fillable = [
        'description'
    ];
    public function automobiles()
    {
        return $this->hasMany(Automobile::class);
    }
    public function models()
    {
        return $this->hasMany(Model::class);            
    }   
}
