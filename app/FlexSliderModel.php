<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlexSliderModel extends Model
{
    protected $table='flexsliders';
    protected $fillable =['title','order','image','box1','img_box1','box2','img_box2','box3','img_box3','box4','img_box4','box5','img_box5','published'];
    public $timestamps = true;
}
