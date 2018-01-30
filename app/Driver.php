<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use SoftDeletes;
    protected   $primaryKey = 'driverid';
    protected $table = 'drivers';
    protected $fillable = ['driverid', 'name', 'city'];
}
