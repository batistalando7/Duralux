<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'nif',
        'vehicleLogbookUpload',
        'bi',
        'biUpload',
        'image',
        'address',
        'city',
        'country'
    ];
    public function automobiles()
    {
        return $this->hasMany(Automobile::class);
    }
}
