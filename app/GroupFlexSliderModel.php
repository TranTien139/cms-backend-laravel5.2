<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupFlexSliderModel extends Model
{
    protected $table='group_flexsliders';
    protected $fillable =['name','published'];
    public $timestamps = true;
}
