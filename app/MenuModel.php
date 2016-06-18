<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    protected $table='menus';
    protected $fillable = ['title','alias','parent_id','order'];
    public $timestamps = true;
}
