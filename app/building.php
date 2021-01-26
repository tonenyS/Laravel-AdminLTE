<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class building extends Model
{
    protected $fillable = [
        'projecct', 'fmcode', 'area','address','zone','lat','long','contact','phone','numberlayer','floorbuilding'
        ,'roomnumber','balance'
    ];
}
