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
        'vehicle_logbook_upload',
        'bi_upload',
        'image',
        'address',
        'city',
        'country'
    ];
}
