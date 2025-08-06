<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Automobile extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['description', 'cost', 'maintenance_date'];
}
