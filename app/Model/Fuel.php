<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fuel extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'description'
    ];
    public function automobiles()
    {
        return $this->hasMany(Automobile::class);
    }
}
